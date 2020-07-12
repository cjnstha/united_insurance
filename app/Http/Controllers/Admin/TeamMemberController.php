<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teams = TeamMember::all();
        return view('admin.team-members.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $team = new TeamMember;

            if ($request->hasfile('team_image')) {
                $image_tmp = Input::file('team_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/team/default/' . $fileName;
                    $large_image_path = 'images/team/large/' . $fileName;
                    $medium_image_path = 'images/team/medium/' . $fileName;
                    $small_image_path = 'images/team/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(898, 836)->save($large_image_path);
                    Image::make($image_tmp)->fit(450, 450)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                    $team->team_image = $fileName;
                }
            }
            $team->team_name = $data['team_name'];
            $team->team_position = $data['team_position'];
            $team->team_email = $data['team_email'];
            $team->team_phone = $data['team_phone'];
            $team->experience = $data['experience'];
            $team->team_description = $data['team_description'];
            $team->team_description_nep = $data['team_description_nep'];
            $team->team_name_nep = $data['team_name_nep'];
            $team->team_position_nep = $data['team_position_nep'];
            $team->hierarchy = $data['hierarchy'];
            $team->status = $data['status'];
            $team->save();
            return redirect()->route('team.index');
        }
    }

    public function edit($id)
    {
        $teams = TeamMember::findOrFail($id);
        return view('admin.team-members.edit', compact('teams'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $team = TeamMember::findOrFail($id);

            if ($request->hasFile('team_image')) {
                $image_tmp = $request->file('team_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/team/default/' . $fileName;
                    $large_image_path = 'images/team/large/' . $fileName;
                    $medium_image_path = 'images/team/medium/' . $fileName;
                    $small_image_path = 'images/team/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(898, 836)->save($large_image_path);
                    Image::make($image_tmp)->fit(450, 450)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
            TeamMember::where(['id' => $id])->update([
                'team_name' => $data['team_name'],
                'team_position' => $data['team_position'],
                'team_email' => $data['team_email'],
                'team_phone' => $data['team_phone'],
                'experience' => $data['experience'],
                'team_description' => $data['team_description'],
                'team_description_nep' => $data['team_description_nep'],
                'team_name_nep' => $data['team_name_nep'],
                'team_position_nep' => $data['team_position_nep'],
                'hierarchy' => $data['hierarchy'],
                'status' => $data['status'],
                'team_image' => $fileName,
            ]);
            return redirect()->route('team.index')->with('flash_message_success', 'Team Member Updated Succesfully');
        }
    }

    public function destroy($id)
    {
        $teams = TeamMember::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Team Memeber Deleted Successfully');
    }
}
