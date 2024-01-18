<?php


namespace Velstack\PHP\Elevators;


use Psr\Container\ContainerExceptionInterface;

class CircularDependencyException extends \Exception implements ContainerExceptionInterface
{

}