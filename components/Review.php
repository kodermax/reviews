<?php
namespace Kodermax\Reviews\Components;


use Cms\Classes\ComponentBase;
use Kodermax\Reviews\Models\Review as ModelReview;

class Review extends ComponentBase
{

    /**
     * @var Kodermax\Reviews\Models\Review The review model used for display.
     */
    public $review;

    public function componentDetails()
    {
        return [
            'name'        => 'kodermax.reviews::lang.plugin.name',
            'description' => 'kodermax.reviews::lang.plugin.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->review = $this->page['review'] = $this->loadReview();
    }
    protected function loadReview()
    {
        $id = $this->property('id');
        $modelReview = new ModelReview();
        $review = $modelReview->where('id', $id)->first();
        return $review;
    }
}