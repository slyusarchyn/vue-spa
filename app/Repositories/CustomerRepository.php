<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Contracts\CustomerRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Slyusarchyn\ValueObjects\Identity\Id;

/**
 * Class CustomerRepository
 * @package App\Repositories
 */
class CustomerRepository implements CustomerRepositoryContract
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * CustomerRepository constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->customer::getAllCustomers();
    }

    /**
     * @param Id $id
     * @return Customer|null
     */
    public function get(Id $id): ?Customer
    {
        return $this->customer::find($id->get());
    }

    /**
     * @param array $params
     * @return Customer
     */
    public function store(array $params): Customer
    {
        return $this->customer::create($params);
    }
}
