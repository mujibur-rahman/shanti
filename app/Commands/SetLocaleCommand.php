<?php namespace App\Commands;

use App\Commands\Command;

use Request;
use Illuminate\Session\SessionManager;
use Illuminate\Contracts\Bus\SelfHandling;

class SetLocaleCommand extends Command implements SelfHandling {

	/**
	 * The availables languages.
	 *
	 * @array $languages
	 */
	protected $languages = ['en','bg'];

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		if(!session()->has('locale'))
		{
			session()->put('locale', Request::getPreferredLanguage($this->languages));
		}

		app()->setLocale(session('locale'));
	}

}
