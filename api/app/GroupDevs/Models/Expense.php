<?php

    namespace App\GroupDevs\Models;

    use Illuminate\Database\Eloquent\Model;

    /**
 * App\GroupDevs\Models\Expense
 *
 * @property int                             $id
 * @property int                             $categories_id
 * @property int                             $users_id
 * @property string|null                     $description
 * @property string|null                     $date
 * @property float|null                      $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Expense whereUsersId($value)
 * @mixin \Eloquent
 */
    class Expense extends Model
    {
        //
    }

