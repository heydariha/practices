 <?php
class Thesaurus
{
    private $thesaurus;
	
    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }
	
    public function getSynonyms($word)
    {
		$result	= array();
		$result['word']  = $word;
		$result['synonyms']  = array();
		if(is_array(@$this->thesaurus[$word]))
			$result['synonyms']  = $this->thesaurus[$word];
		return json_encode($result);
    }
	
}

$thesaurus = new Thesaurus(array(
    "buy" => array(
        "purchase"
    ),
    "big" => array(
        "great",
        "large"
    )
));
echo $thesaurus->getSynonyms("big");
echo "<br>";
echo $thesaurus->getSynonyms("agelast"); 