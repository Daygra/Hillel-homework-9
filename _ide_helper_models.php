<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Expense
 *
 * @property int $id
 * @property float $value
 * @property string $purpose
 * @property string $comment
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expense whereValue($value)
 */
	class Expense extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Income
 *
 * @property int $id
 * @property float $value
 * @property string $source
 * @property string $comment
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Income whereValue($value)
 */
	class Income extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Income[] $incomes
 * @property-read int|null $incomes_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

