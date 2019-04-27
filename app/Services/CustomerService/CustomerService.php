<?php

namespace App\Services\CustomerService;

use App\Models\Customer;
use App\Repositories\Contracts\CustomerRepositoryContract;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService\Contracts\CustomerServiceContract;
use Illuminate\Database\Eloquent\Collection;
use Slyusarchyn\ValueObjects\Identity\Id;

/**
 * Class CustomerService
 * @package App\Services\CustomerService
 */
class CustomerService implements CustomerServiceContract
{
    /**
     * @var CustomerRepository
     */
    private $customerRepository;

    /**
     * CustomerService constructor.
     * @param CustomerRepositoryContract $customerRepository
     */
    public function __construct(CustomerRepositoryContract $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * @return Collection|null
     */
    public function all(): ?Collection
    {
        return $this->customerRepository->all();
    }

    /**
     * @param Id $id
     * @return Customer|null
     */
    public function get(Id $id): ?Customer
    {
        return $this->customerRepository->get($id);
    }

    /**
     * @param array $params
     * @return Customer|null
     */
    public function store(array $params): ?Customer
    {
        return $this->customerRepository->store($params);
    }
}
