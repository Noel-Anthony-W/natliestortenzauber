<?php

namespace App\Livewire;

use App\Models\Picture;
use App\PictureProperties;
use App\PictureTags;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CakePictureGallery extends Component
{
    public PictureTags $currentTag;
    public Collection $allPictures;
    public $skip = 0;
    public $canGoNext = true;
    public $canGoPrevious = false;
    
    protected Collection $currentCollection;
    public $loadingSize;

    private $shown = [
        PictureTags::Pie->value => 0,
        PictureTags::Cake->value => 0,
        PictureTags::Others->value => 0,
    ];

    public function mount($pictures, $loadingSize = 3)
    {
        $this->allPictures = $pictures;
        // Setze einen Standard-Tag, wenn die Komponente geladen wird
        $this->currentTag = PictureTags::Cake;
        $this->loadingSize = $loadingSize; 
        self::setCurrentCollection();    
        self::updateButtonStatus();  
    }

    public function setTag($tag)
    {
        $this->currentTag = fromValue($tag, $this->currentTag);

        self::setCurrentCollection();
        self::updateButtonStatus();
    }

    public function setIndex($index){
        $this->shown[getEnumValue($this->currentTag)] = $index;
    }

    public function addToIndex($value){
        $this->shown[getEnumValue($this->currentTag)] =+ $value;
    }

    public function getNext()
    {
        $this->skip++;
    }

    public function getPrevious()
    {
        $this->skip--;     
    }

    public function getCurrentIndex()
    {
        return $this->shown[getEnumValue($this->currentTag)];
    }    

    public function updateButtonStatus() : void{
        $index = self::getCurrentIndex();   
        $this->canGoPrevious = $this->skip > 0;
        $this->canGoNext = $index + $this->skip < $this->currentCollection->count();
    }

    public function setCurrentCollection(){
        $this->currentCollection = $this->allPictures
        ->where(getEnumValue(PictureProperties::TAG), getEnumValue($this->currentTag));
    }

    public function render()
    {        
        // Hier wird die Logik für die Anzeige der Bilder basierend auf $currentTag ausgeführt
        // Oder du machst diese Variable auch reaktiv, wenn nötig       
        
        self::setCurrentCollection();      
        $collection = $this->currentCollection
        ->skip($this->skip)
        ->take($this->loadingSize);
        self::addToIndex($this->loadingSize);
        
        self::updateButtonStatus();
        // dump($this->currentCollection->count(), $collection->count());
        return view('livewire.cake-picture-gallery', [
            'pictures' => $collection,
            'pictureTags' => PictureTags::class // Für die Verwendung in der Blade-Datei
        ]);
    }

    
}
