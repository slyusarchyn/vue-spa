<?php

namespace App\Services\CustomerService\Contracts;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Slyusarchyn\ValueObjects\Identity\Id;

/**
 * Interface CustomerServiceContract
 * @package App\Services\CustomerService\Contracts
 */
interface CustomerServiceContract
{
    /**
     * @return Collection|null
     */
    public function all(): ?Collection;

    /**
     * @param Id $id
     * @return Customer|null
     */
    public function get(Id $id): ?Customer;

    /**
     * @param array $params
     * @return Customer|null
     */
    public function store(array $params): ?Customer;
}
