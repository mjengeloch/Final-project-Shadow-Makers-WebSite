<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformationsRequest;
use App\Informations;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InformationsController extends Controller
{
    use UploadTrait;

    public function edit()
    {
        $userId = Auth::user()->id;

        $informations = Informations::where('user_id', $userId)->first();

        return view('admin.informations', compact('informations'));
    }

    public function update(InformationsRequest $informationsRequest)
    {
        $userId = Auth::user()->id;

        $informations = Informations::where('user_id', $userId)->first();

        if ($informationsRequest->has('image')) {
            $image = $informationsRequest->file('image');
            $name = Str::slug(Auth::user()->name) . '_' . time();
            $folder = '/images/profil/';
            $this->uploadOne($image, $folder, 'public', $name);
            $informations->image = $name . '.' . $image->getClientOriginalExtension();
        }

        $informations->update($informationsRequest->except(['_token','image']));

        return redirect()->route('informations')->with('info', 'Vos informations on bien été mis à jour');
    }
}
