<?php

namespace App\View; // Adjust the namespace

use joshtronic\LoremIpsum;

class Menu extends View
{

    public function GenerateIpsum()
    {
        $loremIpsum = new LoremIpsum();

        $text = $loremIpsum->words(30);
        echo "<h1>" . $text . "</h1>";
    }

    public function Render()
    {
        echo $this->header;
        $this->GenerateIpsum();
        echo $this->card_header;
        foreach ($this->data as $item) {
            $description_source = $item->description;
            $name_source = $item->name;
            $price_source = $item->price;
            $itemCard = $this->buildItem($this->img_source, $name_source, $price_source, $description_source);
            echo $itemCard;
        }
        echo $this->card_footer;
        echo $this->footer;
    }

    /* _______________________VARIABLES FOR RENDERING_____________________________________________ */


    public $card_header = '<section class="card-section pt-4 mx-4">
    <div class="my-5 mx-3">
        <h2> Menu </h2>
    </div>
    <div class="my-5 mx-3">
    </div>
    <div class="row">
';

    public $card_footer = '    </div>
</section>
';


    public $img_source = "https://wiki.teamfortress.com/w/images/f/f4/Backpack_Sandvich.png";
    function buildItem($img_source, $name_source, $price_source, $description_source)
    {
        $img_source_attr = htmlspecialchars($img_source, ENT_QUOTES, 'UTF-8');

        $image = '<div class="feature rounded-3 my-5 mt-n4 bg-white">
                <img src="' . $img_source_attr . '"
                     alt="Heavy\'s Sandvich">
            </div>';

        $description = '<div class="card-body bg-light">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-6 text-md-left">
                                   <h2 class="text-left fs-4 fw-bold">' . $name_source . '</h2>
                               </div>
                               <div class="col-md-6 text-md-end">
                                   <h2 class="fs-4 fw-bold">$ ' . $price_source . ' </h2>
                               </div>
                           </div>
                       </div>
                       <p class="mb-0"> ' . $description_source . ' </p>
                   </div>';

        $card = '<div class="col-md-4 my-3">
                <div class="card bg-light border-0 h-55">
                    <div class="shadow p-3 card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        ' . $image . '
                        ' . $description . '
                    </div>
                </div>
            </div>';

        return $card;
    }
}
