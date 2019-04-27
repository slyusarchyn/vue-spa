<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Customer\CustomerStorePostRequest;
use App\Services\CustomerService\Contracts\CustomerServiceContract;
use App\Services\CustomerService\CustomerService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Slyusarchyn\ValueObjects\Identity\Exceptions\InvalidIdException;
use Slyusarchyn\ValueObjects\Identity\Id;

/**
 * Class CustomerController
 * @package App\Http\Controllers\Api
 */
class CustomerController extends Controller
{
    /**
     * @var CustomerService
     */
    private $customerService;

    /**
     * CustomerController constructor.
     * @param CustomerServiceContract $customerService
     */
    public function __construct(CustomerServiceContract $customerService)
    {
        $this->customerService = $customerService;
    }

    /**
     * @return JsonResponse
     */
    public function all(): JsonResponse
    {
        return response()->json([
            'customers' => $this->customerService->all()
        ], 200);
    }

    /**
     * @param int $id
     * @return JsonResponse
     * @throws InvalidIdException
     */
    public function get(int $id): JsonResponse
    {
        return response()->json([
            'customer' => $this->customerService->get(new Id($id))
        ], 200);
    }

    /**
     * @param CustomerStorePostRequest $request
     * @return JsonResponse
     */
    public function new(CustomerStorePostRequest $request): JsonResponse
    {
        return response()->json([
            'customer' => $this->customerService->store($request->only([
                'name',
                'email',
                'phone',
                'website',
            ]))
        ], 200);
    }
}
