<?php

namespace App\Http\Controllers;

use Image;
use Auth;

use Illuminate\Http\Request;
use App\Models\EntryPhoto;
// use Illuminate\Support\Facades\Auth;

class PhotoUploadController extends Controller
{
      public function upload()
      {
          return view('photoUpload/photo-upload');
      }


      public function store(Request $request)
      {
          $request->validate
          ([
              'name' => 'required|string|max:255',
              'image' => 'required|image||mimes:jpeg,png,jpg|max:3000',
          ]);

          $imageName = time() . $request->get('name') . '.' . $request->image->extension();
          $request->image->move(public_path('entryPhotos'), $imageName);

          $entryPhoto = new EntryPhoto
          ([
             "name" => $request->get('name'),
             "image_path" => "/entryPhotos/" . $imageName,
             "user_id" =>  Auth::id()
           ]);

          $entryPhoto->save();

          return view('photoUpload/photo-upload-confirmation', ['entryPhoto' => $entryPhoto ]);
        }

        public function thanksmessage()
        {
            return view('photoUpload/photo-upload-thanks-message');
        }

        public function photoDisplay(EntryPhoto $entryPhoto)
        {
            return view('photoUpload/photo-upload-thanks-message');
        }
  }
