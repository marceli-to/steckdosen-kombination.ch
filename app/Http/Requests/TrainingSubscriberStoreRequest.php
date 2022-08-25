<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class TrainingSubscriberStoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */

  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */

  public function rules()
  {
    return [
      'name' => 'required',
      'firstname' => 'required',
      'company' => 'required',
      'email' => 'required|email|max:255',
      'phone' => 'required',
      'date' => 'required',
      'participants' => 'required',
    ];
  }

  /**
   * Custom message for validation
   *
   * @return array
   */

  public function messages()
  {
    return [
      'email.required' => [
        'field' => 'email',
        'error' => 'E-Mail wird benötigt'
      ],
      'email.email' => [
        'field' => 'email',
        'error' => 'E-Mail ist nicht gültig'
      ],
      'email.max' => [
        'field' => 'email',
        'error' => 'E-Mail darf nicht länger als 255 Zeichen sein'
      ],
      'name.required' => [
        'field' => 'name',
        'error' => 'Name wird benötigt'
      ],
      'firstname.required' => [
        'field' => 'firstname',
        'error' => 'Vorname wird benötigt'
      ],
      'company.required' => [
        'field' => 'company',
        'error' => 'Firma wird benötigt'
      ],
      'phone.required' => [
        'field' => 'phone',
        'error' => 'Telefon wird benötigt'
      ],
      'date.required' => [
        'field' => 'date',
        'error' => 'Datum wird benötigt'
      ],
      'participants.required' => [
        'field' => 'participants',
        'error' => 'Anzahl Teilnehmer wird benötigt'
      ],
      'participants.min' => [
        'string' => [
          'field' => 'participants',
          'error' => 'Mind. 10 Teilnehmer'
        ]
      ],
    ];
  }
}