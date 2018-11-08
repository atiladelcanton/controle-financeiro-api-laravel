<?php

    namespace App\GroupDevs\Models;

    use Illuminate\Database\Eloquent\Model;


    /**
     * App\GroupDevs\Models\Category
     *
     * @property int                             $id
     * @property string                          $type 1 = Expenses
     * 2 = Entry
     * @property string                          $name
     * @property bool|null                       $active
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category whereActive($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\Category whereUpdatedAt($value)
     * @mixin \Eloquent
     */
    class Category extends Model
    {
        protected $fillable = ['type', 'name', 'active'];

        protected $casts = ['active' => 'boolean'];
    }

