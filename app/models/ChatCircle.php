<?php

class ChatCircle extends \Eloquent {
	protected $fillable = [];
  protected $table = 'ChatCircles';
  public function messages(){
    return $this->hasMany('Message');
  }
}