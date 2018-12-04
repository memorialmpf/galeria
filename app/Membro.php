<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model {
	protected $table = 'MEMBROS';
	protected $primaryKey = 'pess_cd_mat';
	public function biografia() {
		return $this->hasOne('App\Biografia', 'pess_cd_mat');
	}
}
