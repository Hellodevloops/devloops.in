<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use App\Models\Post;
use App\Models\Career;
use App\Models\Contact;
use Orchid\Support\Color;
use App\Models\Team;
use App\Models\Banner;
use App\Models\Batch;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {

        $postcount = Post::count();
        $contactcount = Contact::count();
        $bannercount = Banner::count();
        $teamcount = Team::count();
        $batchcount = Batch::count();
        $careercount = Career::count();
        // $careercount = Career::count();
        return [
            // Menu::make('Get Started')
            //     ->icon('bs.book')

            //     ->route(config('platform.index')),

            // bi for ochid icona and bs.for bootstrap icons
                Menu::make('Dashboard')
                ->icon('bi user-follow')
                ->title('Navigation')
                ->route('platform.example'),

                Menu::make('Post')
                ->icon('bi user-follow')
                ->route('platform.post.list')
                ->badge(fn () =>  $postcount),

                Menu::make('Contact')
                ->icon('bi user-follow')
                ->route('platform.contact.list')
                ->badge(fn () =>  $contactcount),
            // Menu::make('Career')
            //     ->icon('bi user-follow')
            //     ->route('platform.career.list')
            //     ->badge(fn () =>  $careercount),

            Menu::make('Banner')
                ->icon('bi user-follow')
                ->route('platform.banner.list')
                ->badge(fn () =>  $bannercount),

             Menu::make('Team')
                ->icon('bi user-follow')
                ->route('platform.team.list')
                ->badge(fn () =>  $teamcount),

                Menu::make('Company')
                ->icon('bi user-follow')
                ->route('platform.batch.list')
                ->badge(fn () =>  $batchcount),

                Menu::make('Career')
                ->icon('bi user-follow')
                ->route('platform.career.list')
                ->badge(fn () =>  $careercount),

            // Menu::make('Form Elements')
            //     ->icon('bs.card-list')
            //     ->route('platform.example.fields')
            //     ->active('*/examples/form/*'),

            // Menu::make('Overview Layouts')
            //     ->icon('bs.window-sidebar')
            //     ->route('platform.example.layouts'),

            // Menu::make('Grid System')
            //     ->icon('bs.columns-gap')
            //     ->route('platform.example.grid'),

            // Menu::make('Charts')
            //     ->icon('bs.bar-chart')
            //     ->route('platform.example.charts'),

            // Menu::make('Cards')
            //     ->icon('bs.card-text')
            //     ->route('platform.example.cards')
            //     ->divider(),

            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            // Menu::make('Documentation')
            //     ->title('Docs')
            //     ->icon('bs.box-arrow-up-right')
            //     ->url('https://orchid.software/en/docs')
            //     ->target('_blank'),

            // Menu::make('Changelog')
            //     ->icon('bs.box-arrow-up-right')
            //     ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
            //     ->target('_blank')
            //     ->badge(fn () => Dashboard::version(), Color::DARK),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
