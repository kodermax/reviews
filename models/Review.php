<?php
namespace Kodermax\Reviews\Models;

use Model;

/**
 * Review Model
 */
class Review extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kodermax_reviews_reviews';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id
        ];
        return $this->url = $controller->pageUrl($pageName, $params);
    }
}