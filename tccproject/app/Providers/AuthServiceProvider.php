<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\teachers;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function(User $user){

            return $user->admin === 1;

        });


        Gate::define('bloqueado', function(User $user){

            return $user->acesso === 1;
    
        });

        VerifyEmail::toMailUsing(function($notifiable, $url) {

            return (new MailMessage)
            ->subject('Verificar endereço de e-mail')
            ->line('Clique no botão abaixo para verificar seu endereço de e-mail.')
            ->action('Verificar endereço de e-mail', $url)
            ->line('Se você não criou uma conta, nenhuma ação adicional é necessária.');

        });

        ResetPassword::createUrlUsing(function ($user, string $token) {
            $url = 'http://127.0.0.1:8000/change-password?token='.$token;
            return $url;
        });

        ResetPassword::toMailUsing(function($notifiable, $url) {

            $timeExpire = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');

            return (new MailMessage)
            ->subject('Redefinir senha')
            ->line('Você está recebendo esse email pois nós recebemos uma solicitação de redefinição de senha para sua conta.')
            // ->action('Redefinir senha', $url)
            ->action('Redefinir senha', 'http://127.0.0.1:8000/change-password/'. $url)
            ->line('Esse link para redefinir a senha irá expirar em ' . $timeExpire . ' minutos.')
            ->line('Se você não solicitou a redefinição de sua senha, nenhuma ação adicional é necessária.');

        });



    }
    
}
