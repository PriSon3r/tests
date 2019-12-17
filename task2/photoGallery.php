<?php
 
class PhotoGallery {
   
    public $albumList = [];
    public $album = [];
   
    public function getAlbumList($path)
    {
        $currentDir = scandir($path);
        foreach($currentDir as $item)
        {
            if($item != '.' && $item != '..')
            {
                $info = new SplFileInfo($item);
                if($info->getExtension()) 
                {
                    array_push($this->albumList, $item);
                }
            }
        }
        return $this->albumList;
    }
   
    public function getAlbum($path)
    {
        $currentDir = scandir($path);
        foreach($currentDir as $item) 
        {
            if($item != '.' && $item != '..')
            {
                array_push($this->album, $item);
            }
        }
        return $this->album;  
    }
 
}

?>