<?php
namespace App\Http\Controllers\Api;
use App\Models\TrainingSubscriber;
use App\Http\Requests\TrainingSubscriberStoreRequest;
use App\Mail\TrainingUser;
use App\Mail\TrainingOwner;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class TrainingSubscriberController extends BaseController
{
  /**
   * Save a submitted form and send confirmation emails to the owner and the user
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function store(TrainingSubscriberStoreRequest $request)
  { 
    $data = $request->all();
    Mail::to($data['email'])->send(new TrainingUser($data));
    Mail::to(env('MAIL_TO'))->send(new TrainingOwner($data));
    return response()->json($data);
  }

}
