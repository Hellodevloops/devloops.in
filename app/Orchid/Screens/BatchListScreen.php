<?php

namespace App\Orchid\Screens;


use App\Orchid\Layouts\BatchListLayout;
use App\Models\Batch;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BatchListScreen extends Screen
{
    /**
   * Query data.
   *
   * @return array
   */
  public function query(): array
  {
    return [
        'batchs' => Batch::paginate()
    ];
  }

  /**
   * The name is displayed on the user's screen and in the headers
   */
  public function name(): ?string
  {
      return 'Batchs';
  }

  /**
   * The description is displayed on the user's screen under the heading
   */
  public function description(): ?string
  {
      return "All Batchs";
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
              ->route('platform.batch.edit')
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
        BatchListLayout::class,
      ];
  }
}
