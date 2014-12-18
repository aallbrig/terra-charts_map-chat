<?php

class Message extends \Eloquent {
	protected $fillable = [];
  protected $table = 'Messages';
  public function chatCircle() {
    return $this->belongsTo('ChatCircle');
  }
}