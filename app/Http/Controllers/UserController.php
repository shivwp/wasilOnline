<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
   	public function index()
	{
		return view('index');
    }
	

   	public function about()
	{
		return view('about');
    }

	public function accordion()
	{
		return view('accordion');
	}

	public function alerts()
	{
		return view('alerts');
	}

	public function avatarradius()
	{
		return view('avatarradius');
    }

	public function avatarround()
	{
		return view('avatarround');
    }

	public function avatarsquare()
	{
		return view('avatarsquare');
    }


	public function badge()
	{
		return view('badge');
	}

	public function blog()
	{
		return view('blog');
    }

    public function breadcrumbs()
    {
        return view('breadcrumbs');
    }

    public function buttons()
    {
        return view('buttons');
    }

	public function calendar()
	{
		return view('calendar');
    }

	public function calendar2()
	{
		return view('calendar2');
    }

    public function cards()
	{
		return view('cards');
	}

	public function carousel()
	{
		return view('carousel');
	}

	public function cart()
	{
		return view('cart');
	}

	public function chart()
	{
		return view('chart');
	}

	public function chartchartist()
	{
		return view('chartchartist');
    }

    public function chartdonut()
    {
        return view('chartdonut');
    }

    public function chartechart()
    {
        return view('chartechart');
    }

    public function chartflot()
	{
		return view('chartflot');
	}

    public function chartline()
	{
		return view('chartline');
	}

	public function chartmorris()
	{
		return view('chartmorris');
	}

	public function chartnvd3()
	{
		return view('chartnvd3');
	}

	public function chartpie()
	{
		return view('chartpie');
	}

	public function charts()
	{
		return view('charts');
	}

	public function chat()
	{
		return view('chat');
	}

	public function colors()
	{
		return view('colors');
    }

	public function construction()
	{
		return view('construction');
    }

	public function counters()
	{
		return view('counters');
    }

    public function cryptocurrencies()
	{
		return view('cryptocurrencies');
	}

	public function datatable()
	{
		return view('datatable');
	}

	public function dropdown()
	{
		return view('dropdown');
	}

	public function editprofile()
	{
		return view('editprofile');
	}

    public function email()
	{
		return view('email');
	}

    public function emailview()
	{
		return view('emailview');
	}

	public function emailservices()
	{
		return view('emailservices');
	}

	public function empty()
	{
		return view('empty');
	}

	public function faq()
	{
		return view('faq');
	}

	public function footers()
	{
		return view('footers');
	}

	public function forgotpassword()
	{
		return view('forgotpassword');
    }

    public function form()
	{
		return view('form');
	}

	public function formelements()
	{
		return view('formelements');
	}

	public function formwizard()
	{
		return view('formwizard');
    }

    public function gallery()
	{
		return view('gallery');
	}

	public function headers()
	{
		return view('headers');
	}

	public function icons01()
	{
		return view('icons01');
	}

	public function icons02()
	{
		return view('icons02');
	}

	public function icons03()
	{
		return view('icons03');
	}

	public function icons04()
	{
		return view('icons04');
    }

    public function icons05()
	{
		return view('icons05');
	}

	public function icons06()
	{
		return view('icons06');
	}

	public function icons07()
	{
		return view('icons07');
	}

	public function icons08()
	{
		return view('icons08');
	}

	public function icons09()
	{
		return view('icons09');
	}

	public function icons10()
	{
		return view('icons10');
    }

    public function index2()
	{
		return view('index2');
	}

    public function index3()
	{
		return view('index3');
	}

    public function index4()
	{
		return view('index4');
	}

    public function index5()
	{
		return view('index5');
	}

	public function invoice()
	{
		return view('invoice');
	}

	public function jumbotron()
	{
		return view('jumbotron');
	}

	public function list()
	{
		return view('list');
	}

	public function loaders()
	{
		return view('loaders');
	}

	public function lockscreen()
	{
		return view('lockscreen');
	}

	public function login()
	{
		return view('login');
	}

	public function maps()
	{
		return view('maps');
    }

    public function mediaobject()
	{
		return view('mediaobject');
	}

	public function modal()
	{
		return view('modal');
	}

	public function navigation()
	{
		return view('navigation');
	}

	public function notify()
	{
		return view('notify');
	}

    public function pagination()
	{
		return view('pagination');
	}

    public function panels()
	{
		return view('panels');
	}

	public function pricing()
	{
		return view('pricing');
	}

	public function profile()
	{
		return view('profile');
	}

	public function progress()
	{
		return view('progress');
    }

	public function rangeslider()
	{
		return view('rangeslider');
    }

    public function rating()
	{
		return view('rating');
	}

    public function register()
	{
		return view('register');
	}

	public function scroll()
	{
		return view('scroll');
	}

	public function search()
	{
		return view('search');
	}

	public function services()
	{
		return view('services');
	}

	public function shop()
	{
		return view('shop');
	}

	public function shopdescription()
	{
		return view('shopdescription');
    }

	public function sweetalert()
	{
		return view('sweetalert');
	}

	public function tables()
	{
		return view('tables');
	}

	public function tabs()
	{
		return view('tabs');
	}

	public function tags()
	{
		return view('tags');
	}

	public function terms()
	{
		return view('terms');
	}

	public function thumbnails()
	{
		return view('thumbnails');
    }

    public function timeline()
	{
		return view('timeline');
	}

	public function tooltipandpopover()
	{
		return view('tooltipandpopover');
	}

	public function typography()
	{
		return view('typography');
	}

	public function userslist()
	{
		return view('userslist');
    }

	public function widgets()
	{
		return view('widgets');
	}

	public function error400()
	{
		return view('error400');
	}

	public function error401()
	{
		return view('error401');
	}

	public function error403()
	{
		return view('error403');
	}

	public function error404()
	{
		return view('error404');
	}

	public function error500()
	{
		return view('error500');
    }

	public function error503()
	{
		return view('error503');
    }

	public function verticalmenu()
	{
		return view('verticalmenu');
    }

	public function horizontalmenu()
	{
		return view('horizontalmenu');
    }

}
