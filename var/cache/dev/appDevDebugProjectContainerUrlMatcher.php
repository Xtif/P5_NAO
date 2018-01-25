<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/m')) {
            // map
            if ('/map' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::mapAction',  '_route' => 'map',);
            }

            // modify_observation
            if (0 === strpos($pathinfo, '/modifier_observation') && preg_match('#^/modifier_observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_observation')), array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::modifyAction',));
            }

            if (0 === strpos($pathinfo, '/motdepasseperdu')) {
                // fos_user_resetting_request
                if ('/motdepasseperdu/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/motdepasseperdu/reset') && preg_match('#^/motdepasseperdu/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/motdepasseperdu/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/motdepasseperdu/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            // legal_notice
            if ('/mentions_legales' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::legalNoticeAction',  '_route' => 'legal_notice',);
            }

        }

        elseif (0 === strpos($pathinfo, '/aj')) {
            // add_observation
            if ('/ajouter_observation' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::addAction',  '_route' => 'add_observation',);
            }

            if (0 === strpos($pathinfo, '/ajax_dropzone')) {
                // ajax_dropzone
                if ('/ajax_dropzone' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::ajaxDropzoneAction',  '_route' => 'ajax_dropzone',);
                }

                // ajax_dropzone_modify
                if ('/ajax_dropzone_modify' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::ajaxDropzoneModifyAction',  '_route' => 'ajax_dropzone_modify',);
                }

            }

            // ajax_remove_picture
            if ('/ajax_remove_picture' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::ajaxRemovePictureAction',  '_route' => 'ajax_remove_picture',);
            }

        }

        // access_denied
        if ('/access_refuse' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ErrorController::accessDeniedAction',  '_route' => 'access_denied',);
        }

        // publish_observation
        if (0 === strpos($pathinfo, '/publier_observation') && preg_match('#^/publier_observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'publish_observation')), array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::publishAction',));
        }

        if (0 === strpos($pathinfo, '/profil')) {
            // fos_user_profile_show
            if ('/profil' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profil/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profil/modifier_mdp' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            // remove_observation
            if (0 === strpos($pathinfo, '/suppression_observation') && preg_match('#^/suppression_observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_observation')), array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::removeAction',));
            }

            // remove_user
            if (0 === strpos($pathinfo, '/supprimer_utilisateur') && preg_match('#^/supprimer_utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::removeUserAction',));
            }

            // report_observation
            if (0 === strpos($pathinfo, '/signaler_observation') && preg_match('#^/signaler_observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_observation')), array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::reportAction',));
            }

        }

        // observation
        if (0 === strpos($pathinfo, '/observation') && preg_match('#^/observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'observation')), array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::observationAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            // observation_list
            if ('/liste_observation' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ObservationsController::observationListAction',  '_route' => 'observation_list',);
            }

            // user_list
            if ('/liste_utilisateur' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::userListAction',  '_route' => 'user_list',);
            }

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // dashboard
        if ('/tableau_de_bord' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'dashboard',);
        }

        // user
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::userAction',));
        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ContactController::contactAction',  '_route' => 'contact',);
        }

        // fos_user_security_login
        if ('/connexion' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_login;
            }

            return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }
        not_fos_user_security_login:

        // tos
        if ('/CGU' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tosAction',  '_route' => 'tos',);
        }

        // fos_user_security_logout
        if ('/deconnexion' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if ('/inscription' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                $ret = array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/inscription/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/inscription/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/inscription/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // promote_user
        if (0 === strpos($pathinfo, '/naturaliser_utilisateur') && preg_match('#^/naturaliser_utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'promote_user')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::promoteUserAction',));
        }

        // demote_user
        if (0 === strpos($pathinfo, '/retrograder_utilisateur') && preg_match('#^/retrograder_utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demote_user')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::demoteUserAction',));
        }

        // error_page
        if ('/error' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ErrorController::errorAction',  '_route' => 'error_page',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
