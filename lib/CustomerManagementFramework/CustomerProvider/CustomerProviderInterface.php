<?php
namespace CustomerManagementFramework\CustomerProvider;

use CustomerManagementFramework\Model\CustomerInterface;

interface CustomerProviderInterface
{
    /**
     * @return int
     */
    public function getCustomerClassId();

    /**
     * @return string
     */
    public function getCustomerClassName();

    /**
     * Get an object listing
     *
     * @return \Pimcore\Model\Object\Listing\Concrete
     */
    public function getList();

    /**
     * Create a customer instance
     *
     * @param array $data
     * @return CustomerInterface
     */
    public function create(array $data = []);

    /**
     * Update a customer instance
     *
     * @param CustomerInterface $customer
     * @param array $data
     * @return CustomerInterface
     */
    public function update(CustomerInterface $customer, array $data = []);

    /**
     * Delete a customer instance
     *
     * @param CustomerInterface $customer
     * @return $this
     */
    public function delete(CustomerInterface $customer);

    /**
     * Get customer by ID
     *
     * @param int $id
     * @return CustomerInterface|null
     */
    public function getById($id);
}
