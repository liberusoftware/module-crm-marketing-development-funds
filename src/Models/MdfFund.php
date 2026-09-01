<?php

declare(strict_types=1);

namespace Liberu\CRM\MarketingDevelopmentFunds\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property float $budget
 * @property float $committed
 * @property float $spent
 */
final class MdfFund extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_mdf_funds';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['budget' => 'decimal:2', 'committed' => 'decimal:2', 'spent' => 'decimal:2', 'starts_on' => 'date', 'ends_on' => 'date', 'metadata' => 'array'];
    }
}
