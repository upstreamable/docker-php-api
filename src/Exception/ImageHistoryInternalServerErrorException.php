<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class ImageHistoryInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Server error', 500);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
