<?php
/**
 * DISCLAIMER :
 *
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile_ElasticSuite
 * @package   Smile\ElasticSuiteCore
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticSuiteCore\Api\Index;

/**
 * Bulk operation representation interface.
 *
 * @category Smile_ElasticSuite
 * @package  Smile\ElasticSuiteCore
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
interface BulkInterface
{

    /**
     * Indicates if the current bulk contains operation.
     *
     * @return boolean
     */
    public function isEmpty();

    /**
     * Return list of operations to be executed as an array.
     *
     * @return array
     */
    public function getOperations();

    /**
     * Add a single document to the index.
     *
     * @param IndexInterface $index Index the document has to be added to.
     * @param TypeInterface  $type  Document type.
     * @param string|integer $docId Document id.
     * @param array          $data  Document data.
     *
     * @return \Smile\ElasticSuiteCore\Api\Index\BulkInterface Self reference.
     */
    public function addDocument(IndexInterface $index, TypeInterface $type, $docId, array $data);

    /**
     * Add a several documents to the index.
     *
     * $data format have to be an array of all documents with document id as key.
     *
     * @param IndexInterface $index Index the documents have to be added to.
     * @param TypeInterface  $type  Document type.
     * @param array          $data  Document data.
     *
     * @return \Smile\ElasticSuiteCore\Api\Index\BulkInterface Self reference.
     */
    public function addDocuments(IndexInterface $index, TypeInterface $type, array $data);

    /**
     * Delete a document from the index.
     *
     * @param IndexInterface $index Index the document has to be delete from.
     * @param TypeInterface  $type  Document type.
     * @param string|integer $docId Document id.
     *
     * @return \Smile\ElasticSuiteCore\Api\Index\BulkInterface Self reference.
     */
    public function deleteDocument(IndexInterface $index, TypeInterface $type, $docId);

    /**
     *
     * @param IndexInterface $index  Index the document has to be delete from.
     * @param TypeInterface  $type   Type of the documents to be delete.
     * @param array          $docIds Ids of the deleted documents.
     */
    public function deleteDocuments(IndexInterface $index, TypeInterface $type, array $docIds);

    /**
     * Update a single document to the index.
     *
     * Note : only updated fields are needed into data.
     *        Others fields are kept untouched by the update operation.
     *
     * @param IndexInterface $index Index the document has to be added to.
     * @param TypeInterface  $type  Document type.
     * @param string|integer $docId Document id.
     * @param array          $data  Updated data.
     *
     * @return \Smile\ElasticSuiteCore\Api\Index\BulkInterface Self reference.
     */
    public function updateDocument(IndexInterface $index, TypeInterface $type, $docId, array $data);

    /**
     * Update a several documents to the index.
     *
     * $data format have to be an array of all documents update data with document id as key.
     *
     * @param IndexInterface $index Index the documents have to be added to.
     * @param TypeInterface  $type  Document type.
     * @param array          $data  Document data.
     *
     * @return \Smile\ElasticSuiteCore\Api\Index\BulkInterface Self reference.
     */
    public function updateDocuments(IndexInterface $index, TypeInterface $type, array $data);
}
