<?php

    namespace App\GroupDevs\Models {

        use Illuminate\Foundation\Auth\User as Authenticatable;
        use Illuminate\Notifications\Notifiable;

        /**
 * App\GroupDevs\Models\User
 *
 * @property int $id
 * @property int $prefectures_id
 * @property string $name
 * @property string $email
 * @property string|null $password
 * @property string|null $remember_token
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User wherePrefecturesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupDevs\Models\User whereRememberToken($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
        {
            use Notifiable;

            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable
                = [
                    'name',
                    'email',
                    'password',
                ];

            /**
             * The attributes that should be hidden for arrays.
             *
             * @var array
             */
            protected $hidden
                = [
                    'password',
                    'remember_token',
                ];
        }
    }
