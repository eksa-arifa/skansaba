<?php

namespace App\Http\Controllers;


use App\Models\Attachment;
use App\Models\Berita;
use App\Models\Major;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beritaCreate(Request $request)
    {
        $request->validate([
            "image" => "required|image|max:2056",
            "title" => "required",
            "content" => "required",
        ]);

        try {
            $create = Berita::create([
                "title" => $request->title,
                "content" => $request["content"],
                "user_id" => auth()->user()->id,
            ]);

            if (!$create) {
                throw new \Exception();
            }

            $file = $request->file("image");

            $path = $file->store("images", "public");

            $attachmentUpload = Attachment::create([
                "berita_id" => $create->id,
                "path" => env("APP_URL") . '/storage/' . $path
            ]);

            if (!$attachmentUpload) {
                Berita::destroy($create->id);
                throw new \Exception();
            }

            return redirect()->route("admin.berita")->with("success", "berita created successfully!");
        } catch (\Exception $e) {
            return redirect()->route("admin.berita")->with("error", 'failed');
        }
    }

    public function beritaUpdate(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|max:2056',
            'title' => 'required',
            'content' => 'required',
        ]);
        try {

            if ($request->image) {

                $file = $request->file('image');

                $path = $file->store("images", "public");

                if (!$path) {
                    throw new \Exception("");
                }

                $attachment = Attachment::where("berita_id", $request->id)->first();

                $delpath = explode("/", $attachment->path)[5];

                unlink('storage/images/' . $delpath);


                $update = $attachment->update([
                    "path" => env("APP_URL") . '/storage/' . $path
                ]);

                if (!$update) {
                    throw new \Exception('');
                }
            }


            $berita = Berita::find($request->id);

            $beritaUpdate = $berita->update([
                "title" => $request->title,
                "content" => $request["content"]
            ]);


            if (!$beritaUpdate) {
                throw new \Exception("");
            }


            return redirect()->route('admin.berita')->with('success', 'successfully edited!');

        } catch (\Exception $e) {
            return redirect()->route('admin.berita')->with("error", 'failed!');
        }
    }

    public function majorCreate(Request $request)
    {
        $request->validate([
            "name" => "required|max:50",
            "description" => "required",
            "image" => "required|image|max:2056"
        ]);
        try {
            $file = $request->file('image');
            $path = $file->store("images", "public");

            if (!$path) {
                throw new \Exception();
            }

            $major = Major::create([
                "title" => $request->name,
                "description" => $request->description,
                "image" => env("APP_URL") . '/storage/' . $path
            ]);

            if (!$major) {
                throw new \Exception();
            }

            return redirect()->route('admin.major')->with('success', 'data inserted successfully!');
        } catch (\Exception $e) {
            return redirect()->route("admin.major")->with("error", $e->getMessage());
        }
    }

    public function majorUpdate(Request $request)
    {
        $request->validate([
            "name" => "required|max:50",
            "description" => "required",
            "image" => "nullable|image|max:2056"
        ]);
        try {
            $major = Major::find($request->id);
            if ($request->image) {
                $file = $request->file("image");
                $path = $file->store("images", "public");

                if (!$path) {
                    throw new \Exception("");
                }


                $delpath = explode("/", $major->image)[5];

                unlink('storage/images/' . $delpath);


                $update = $major->update([
                    "image" => env("APP_URL") . '/storage/' . $path
                ]);

                if (!$update) {
                    throw new \Exception('');
                }
            }


            $majorUpdate = $major->update([
                "title" => $request->name,
                "description" => $request->description
            ]);


            if(!$majorUpdate){
                throw new \Exception("");
            }


            return redirect()->route('admin.major')->with('success','successfully edited!');


        } catch (\Exception $e) {
            return redirect()->route('admin.major')->with('error', "failed!");
        }
    }
}
