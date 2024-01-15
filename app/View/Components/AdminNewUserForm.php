<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminNewUserForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $showParty;
    public $formUrl;
    public $userId;

    public $profile_image;
    public $party_id;
    public $party_logo;
    public $user_name;
    public $user_dob;
    public $user_gender;
    public $mobile_no;
    public $user_password;
    public $user_email;
    public $user_address;
    public $national_id;

    public function __construct(
        $title,
        $formUrl,
        $userId="",
        $candidate="",
        $showParty=true,
    ){
        $this->title = $title;
        $this->showParty = $showParty;
        $this->formUrl = $formUrl;
        $this->userId = $userId;

        $this->profile_image = $candidate!="" && $candidate["user_image"]!="" ? $candidate["user_image"]:"/images/profile_avatar.svg";
        $this->party_id =      $candidate!="" ? $candidate["party_id"]:1;
        $this->party_logo =    "/images/national_anthem.png";
        $this->user_name =     $candidate!="" ? $candidate["user_name"]:"";
        $this->user_dob =      $candidate!="" ? $candidate["date_of_birth"]:"";
        $this->user_gender =   $candidate!="" ? $candidate["gender"]:"";
        $this->mobile_no =     $candidate!="" ? $candidate["mobile_number"]:"";
        $this->user_password = "";
        $this->user_email =    $candidate!="" ? $candidate["email"]:"";
        $this->user_address =  $candidate!="" ? $candidate["address"]:"";
        $this->national_id =   $candidate!="" ? $candidate["national_id"]:"";
    }

    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-new-user-form');
    }
}
