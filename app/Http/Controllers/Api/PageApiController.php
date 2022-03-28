<?php



namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\PageMeta;



class PageApiController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $page = Page::select('id','title','arab_title','content','arab_content')->where('id','=',$request->id)->first();

        if(!empty($request->language) && $request->language == "arabic"){
            $page->title = $page->arab_title;
            $page->content = $page->arab_content;
         
        }
        $metatitle = $this->getMeta($page->id,'Pagemeta_title');
        $metades = $this->getMeta($page->id,'Pagemeta_details');
        $metakeyword = $this->getMeta($page->id,'Pagemeta_keywords');
        $page['metatitle'] = !empty($metatitle) ? $metatitle : "";
        $page['meta_details'] = !empty($metades) ? $metades : "";
        $page['meta_keyword'] = !empty($metakeyword) ? $metakeyword : "";

            return response()->json(['status' => true, 'message' => "page", 'data' => $page], 200);

    }

    public function getMeta($pageid,$title){
        $PageMeta = PageMeta::where('page_id',$pageid)->where('key',$title)->first();
        return $PageMeta->value;
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

    }

}

