<?php

namespace App\Repositories\Contracts;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Slyusarchyn\ValueObjects\Identity\Id;

/**
 * Interface CustomerRepositoryContract
 * @package App\Repositories\Contracts
 */
interface CustomerRepositoryContract
{
    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * @param Id $id
     * @return Customer|null
     */
    public function get(Id $id): ?Customer;

    /**
     * @param array $params
     * @return Customer
     */
    public function store(array $params): Customer;
}
