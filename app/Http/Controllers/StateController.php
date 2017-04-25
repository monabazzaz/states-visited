<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class StateController extends Controller
{

  public function index ()
  {
    $states = State::all();
    return Response::json($states);
  }

  public function show ($id)
  {
    $state = State::find($id);
    return Response::json($state);
  }

  public function update (Request $request, $id)
  {
    $state = State::find($id);
    $state->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function create (Request $request)
  {
    $state = State::create($request->all());
    return Response::json(['created' => true]);
  }

  public function destroy ($id)
  {
    $state = State::find($id);
    $state->delete();
    return Response::json(['deleted' => true]);
  }

}
