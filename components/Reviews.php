<?php namespace Kodermax\Reviews\Components;

use Kodermax\Reviews\Models\Review as ModelReview;
use Cms\Classes\ComponentBase;

class Reviews extends ComponentBase
{
    protected $reviewItems;
    public $reviewPage;

    public function componentDetails()
    {
        return [
            'name'        => 'Reviews Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function reviewItems() {
        if ($this->reviewItems !== null)
            return $this->reviewItems;

        $reviews = new ModelReview;
        $reviewItems = $reviews::all();
        $reviewItems->each(function($review){
            $review->setUrl("reviews", $this->controller);
        });
        $reviewItems = $reviewItems->toArray();

        if ($reviewItems)
            $this->reviewItems = $reviewItems;

        return $this->reviewItems;
    }
    public function onRun()
    {
        $this->page['reviewItems'] = $this->reviewItems();
    }

}