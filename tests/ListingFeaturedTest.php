<?php 

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase {

	/** 	@test 
	 * 		Test if getStatus return 'featured'
	 */
    public function testStatus()
    {
    	$data = [
            "id"        => 1, 
            "title"     => "Testing",
            "status"    => "featured"
        ];
    	$listing = new ListingFeatured($data);
    	$this->assertEquals(
    		"featured",
    		$listing->getStatus()
    	);
    }

    /**     @test
     *      test if getCoc return value
     */
    public function testCoc()
    {
        $data = [
            "id"        => 1, 
            "title"     => "Testing",
            "status"    => "featured",
            "coc"       => "Tests"
        ];
        $listing = new ListingFeatured($data);
        $this->assertEquals(
            "Tests",
            $listing->getCoc()
        );
    }
    

}