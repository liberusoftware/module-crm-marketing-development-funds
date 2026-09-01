<?php

declare(strict_types=1);

namespace Liberu\CRM\MarketingDevelopmentFunds\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $status @property float $amount @property float $reimbursed @property float $attributed_revenue */
final class MdfRequest extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_mdf_requests';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['amount' => 'decimal:2', 'reimbursed' => 'decimal:2', 'attributed_revenue' => 'decimal:2', 'metadata' => 'array'];
    }
}
