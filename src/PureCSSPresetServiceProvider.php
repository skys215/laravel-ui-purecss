<?php

namespace InfyOm\PureCSSPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class PureCSSPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('purecss', function (UiCommand $command) {
            $adminLTEPreset = new PureCSSPreset($command);
            $adminLTEPreset->install();

            $command->info('PureCSS scaffolding installed successfully.');

            if ($command->option('auth')) {
                $adminLTEPreset->installAuth();
                $command->info('PureCSS CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('purecss-localized', function (UiCommand $command) {
            $adminLTEPreset = new PureCSSLocalizedPreset($command);
            $adminLTEPreset->install();

            $command->info('PureCSS scaffolding installed successfully with localization.');

            if ($command->option('auth')) {
                $adminLTEPreset->installAuth();
                $command->info('PureCSS CSS auth scaffolding installed successfully with localization.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('purecss-fortify', function (UiCommand $command) {
            $fortifyPureCSSPreset = new PureCSSPreset($command, true);
            $fortifyPureCSSPreset->install();

            $command->info('PureCSS scaffolding installed successfully for Laravel Fortify.');

            if ($command->option('auth')) {
                $fortifyPureCSSPreset->installAuth();
                $command->info('PureCSS CSS auth scaffolding installed successfully for Laravel Fortify.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        if (class_exists(Fortify::class)) {
            Fortify::loginView(function () {
                return view('auth.login');
            });

            Fortify::registerView(function () {
                return view('auth.register');
            });

            Fortify::confirmPasswordView(function () {
                return view('auth.passwords.confirm');
            });

            Fortify::requestPasswordResetLinkView(function () {
                return view('auth.passwords.email');
            });

            Fortify::resetPasswordView(function () {
                return view('auth.passwords.reset');
            });

            Fortify::verifyEmailView(function () {
                return view('auth.verify');
            });
        }
    }
}
