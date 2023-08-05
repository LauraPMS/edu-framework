<?php
/*
 * Ce fichier fait partie du Studoo
 *
 * @author Benoit Foujols
 *
 * Pour les informations complètes sur les droits d'auteur et la licence,
 * veuillez consulter le fichier LICENSE qui a été distribué avec ce code source.
 */

namespace Studoo\EduFramework\Core\Controller\Error;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class HttpError404Controller
 * Classe Controller pour les erreurs HTTP
 */
class HttpError405Controller implements ControllerInterface
{
    /**
     * Si y a pas de route valide alors j'affiche la page 404
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function execute(Request $request): string
    {
        return TwigCore::getEnvironment()->render(
            'error/http-405.html.twig',
            []
        );
    }
}
