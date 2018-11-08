<?php

    namespace App\GroupDevs\Models;

    use Illuminate\Database\Eloquent\Model;

    /**
     * App\GroupDevs\Models\Entry
     *
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry query()
     * @mixin \Eloquent
     * @property int                             $id
     * @property int                             $categories_id
     * @property int                             $users_id
     * @property string|null                     $description
     * @property float|null                      $price
     * @property string|null                     $date
     * @property int|null                        $monthly_entry
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereCategoriesId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereDescription($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereMonthlyEntry($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry wherePrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Entry whereUsersId($value)
     */
    class Entry extends Model
    {
        //
    }

