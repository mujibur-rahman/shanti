<?php namespace App\Commands;

use App\Commands\Command;
use Illuminate\Session\SessionManager;
use Illuminate\Contracts\Bus\SelfHandling;

class ChangeLocaleCommand extends Command implements SelfHandling {

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		session()->set('locale', session('locale') == 'bg' ? 'en' : 'bg');
	}

}
