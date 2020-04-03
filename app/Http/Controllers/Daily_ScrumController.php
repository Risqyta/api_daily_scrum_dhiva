<?php

namespace App\Http\Controllers;
use App\Daily_Scrum;
use Illuminate\Http\Request;

class Daily_ScrumController extends Controller
{
       
        public function index()
        {
            $data = Daily_Scrum::all();
            {
                return response($data);
            }
        }
    
        public function show($id)
        {
            $data = Daily_Scrum::where('id',$id)->get();
            return response($data);
        }
    
        public function store(Request $request)
        {
            try {
                $data = new Daily_Scrum();
                $data->id_users= $request->input('id_users');
                $data->team = $request->input('team');
                $data->activity_today = $request->input('activity_today');
                $data->activity_yesterday = $request->input('activity_yesterday');
                $data->problem_yesterday = $request->input('problem_yesterday');
                $data->solution = $request->input('solution');
                $data->save();
                return response()->json([
                    'status'    => '1',
                    'message'   => 'Tambah data berhasil !'
                ]);
            }catch(\Exception $e) {
                return response()->json([
                    'status'    => '1',
                    'message'   => 'Tambah data gagal !'
                ]);
            }
        }
    
       
        public function update(Request $request, $id)
        {
            try {
                $data = Daily_Scrum::where('id',$id)->first();
                $data->id_users= $request->input('id_users');
                $data->team = $request->input('team');
                $data->activity_today = $request->input('activity_today');
                $data->activity_yesterday = $request->input('activity_yesterday');
                $data->problem_yesterday = $request->input('problem_yesterday');
                $data->solution = $request->input('solution');
                return response()->json([
                    'status'    => '1',
                    'message'   => 'Ubah data berhasil !'
                ]);
            }catch(\Exception $e) {
                return response()->json([
                    'status'    => '1',
                    'message'   => 'Ubah data gagal !'
                ]);
            }
        }
    
        public function destroy($id)
        {
            try {
                $data = Daily_Scrum::where('id',$id)->first();
                $data->delete();
                return response()->json([
                    'status'    => '1',
                    'message'   => 'Hapus data berhasil !'
                ]);
            }catch(\Exception $e) {
                return response()->json([
                    'status'    => '1',
                    'message'   => 'Hapus data gagal !'
                ]);
            }
            
        }
    }
    