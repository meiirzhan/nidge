<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeadCreated;
class ApiController extends Controller
{

  public function form(Request $request,  \linkprofit\AmoCRM\RequestHandler $req) {
    $connection = new \linkprofit\AmoCRM\entities\Authorization(
        'nidge.studio@gmail.com',
        '1d425a71be84bf65dc37026cc7b155406a97da6d'
    );

    $authorization = new \linkprofit\AmoCRM\services\AuthorizationService($req);
    $authorization->add($connection);
    $authorization->authorize();

    $accountService = new \linkprofit\AmoCRM\services\AccountService($req);
    $account = $accountService->getAccount();
    // return $accountService->getCustomFields();
    $customField = new \linkprofit\AmoCRM\entities\CustomField($id = '23829');
    $customField->addValue(new \linkprofit\AmoCRM\entities\Value($request->phone, '42681'));
    $contact = new \linkprofit\AmoCRM\entities\Contact();
    $contact->responsible_user_id = $account->current_user;
    $contact->name = $request->name;
    $contact->addCustomField($customField);

    $contactService = new \linkprofit\AmoCRM\services\ContactService($req);
    $contactService->add($contact);
    $contactService->save();
    $contactResponse = $contactService->parseResponseToEntities();
    $lead = new \linkprofit\AmoCRM\entities\Lead();
    $lead->name = $request->name;
    $lead->contacts_id = $contactResponse[0]->id;
    $lead->status_id = 23356213;
    $lead->sale = $request->has('total') ? $request->total : 0;
    $lead->responsible_user_id = $account->current_user;

    $leadService = new \linkprofit\AmoCRM\services\LeadService($req);
    $leadService->add($lead);
    $leadService->save();

    $lead = new LeadCreated([
  		'name' => $request->has('name') ? $request->name : '-',
  		'phone' => $request->has('phone') ? $request->phone : '-',
  		'product' => $request->has('product') ? $request->product : '-',
  		'type' => $request->has('type') ? $request->type : '-',
  		'design' => $request->has('design') ? $request->design : '-',
  		'has_tz' => $request->has('has_tz') ? $request->has_tz : '-',
  		'total' => $request->has('total') ? $request->total : '-'
  	]);
    Mail::to("m.ryskeldi@gmail.com")->send($lead);

    return [
      'status' => 'success'
    ];
  }

}
