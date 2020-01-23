<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $team = 'team';
    protected $fillable = [
        "leaderName",
        "leaderAddress",
        "leaderBirth",
        "leaderEmail",
        "leaderNumber",
        "leaderLine",
        "leaderGithub",
        "leaderCV",
        "leaderProject",
        "member1Name",
        "member1Address",
        "member1Birth",
        "member1Email",
        "member1Number",
        "member1Line",
        "member1Github",
        "member1CV",
        "member1Project",
        "member2Name",
        "member2Address",
        "member2Birth",
        "member2Email",
        "member2Number",
        "member2Line",
        "member2Github",
        "member2CV",
        "member2Project",
        "payment_image",
        "payment_status",
        "teamname"
    ];
}
