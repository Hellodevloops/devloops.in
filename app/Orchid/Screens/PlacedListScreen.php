<?php

namespace App\Orchid\Screens;
use App\Orchid\Layouts\PlacedListLayout;
use App\Models\Placed;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class PlacedListScreen extends Screen
{
    /**
   * Query data.
   *
   * @return array
   */
  public function query(): array
  {
      return [
          'placeds' => Placed::filters()->defaultSort('id')->paginate(),
          'recentPlaceds' => Placed::latest()->take(5)->get(),
      ];
  }

  /**
   * The name is displayed on the user's screen and in the headers
   */
  public function name(): ?string
  {
      return 'Placed';
  }

  /**
   * The description is displayed on the user's screen under the heading
   */
  public function description(): ?string
  {
      return "All Placed";
  }

  /**
   * Button commands.
   *
   * @return Link[]
   */
  public function commandBar(): array
  {
      return [
          Link::make('Create new')
              ->icon('pencil')
              ->route('platform.placed.edit')
      ];
  }

   /**
   * Views.
   *
   * @return array
   */
  public function layout(): array
  {
      return [
        PlacedListLayout::class,
      ];
  }
}
