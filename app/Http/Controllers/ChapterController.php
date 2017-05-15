<?php

namespace Foobooks\Http\Controllers;

use Foobooks\Chapter;
use Illuminate\Http\Request;
use Foobooks\Http\Requests\CreateChapterRequest;

class ChapterController extends Controller
{
    public function __construct()
    {
 		$this->middleware('auth0.jwt');
    }
    /**
     * Responds to requests to GET /chapters/{id}
     */
	public function getChapter($id = null) {
		$chapter = Chapter::whereId($id)->first();
    	return response()->json(['chapter'=>$chapter],200);
	}

	/**
	 * Responds to requests to POST /books/create
	 */
	public function postCreate(CreateChapterRequest $request) {

	    // If the code makes it here, you can assume the validation passed
	    $name = $request->input('name');
	    $content = $request->input('content');
	    $book_id = $request->input('book_id');

	    // Code would go here to add the book to the database
	    $chapter = Chapter::updateOrCreate(
	    		['name' => $name, 
	    		'content' => $content,
	    		'book_id' => $book_id
	    		]
	    );

	    // Then you'd give the user some sort of confirmation:
    	return response()->json(['chapter'=>$chapter],200);
	}

}
