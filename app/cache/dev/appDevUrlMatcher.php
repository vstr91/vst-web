<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // pt_BR__RG__fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_security_login',);
        }

        // en__RG__fos_user_security_login
        if ($pathinfo === '/en/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
        }

        // pt_BR__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/central-do-cliente/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pt_BR__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_profile_show',);
        }
        not_pt_BR__RG__fos_user_profile_show:

        // en__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/en/central-do-cliente/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_show',);
        }
        not_en__RG__fos_user_profile_show:

        // pt_BR__RG__fos_user_profile_edit
        if ($pathinfo === '/central-do-cliente/profile/edit') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_profile_edit',);
        }

        // en__RG__fos_user_profile_edit
        if ($pathinfo === '/en/central-do-cliente/profile/edit') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_edit',);
        }

        // pt_BR__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/central-do-cliente/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pt_BR__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_registration_register',);
        }

        // en__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/en/central-do-cliente/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
        }

        // pt_BR__RG__fos_user_registration_check_email
        if ($pathinfo === '/central-do-cliente/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_registration_check_email',);
        }
        not_pt_BR__RG__fos_user_registration_check_email:

        // en__RG__fos_user_registration_check_email
        if ($pathinfo === '/en/central-do-cliente/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
        }
        not_en__RG__fos_user_registration_check_email:

        // pt_BR__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/central-do-cliente/register/confirm') && preg_match('#^/central\\-do\\-cliente/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__fos_user_registration_confirm:

        // en__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/en/central-do-cliente/register/confirm') && preg_match('#^/en/central\\-do\\-cliente/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_registration_confirm:

        // pt_BR__RG__fos_user_registration_confirmed
        if ($pathinfo === '/central-do-cliente/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_registration_confirmed',);
        }
        not_pt_BR__RG__fos_user_registration_confirmed:

        // en__RG__fos_user_registration_confirmed
        if ($pathinfo === '/en/central-do-cliente/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
        }
        not_en__RG__fos_user_registration_confirmed:

        // pt_BR__RG__fos_user_resetting_request
        if ($pathinfo === '/central-do-cliente/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_resetting_request',);
        }
        not_pt_BR__RG__fos_user_resetting_request:

        // en__RG__fos_user_resetting_request
        if ($pathinfo === '/en/central-do-cliente/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
        }
        not_en__RG__fos_user_resetting_request:

        // pt_BR__RG__fos_user_resetting_send_email
        if ($pathinfo === '/central-do-cliente/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_resetting_send_email',);
        }
        not_pt_BR__RG__fos_user_resetting_send_email:

        // en__RG__fos_user_resetting_send_email
        if ($pathinfo === '/en/central-do-cliente/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
        }
        not_en__RG__fos_user_resetting_send_email:

        // pt_BR__RG__fos_user_resetting_check_email
        if ($pathinfo === '/central-do-cliente/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_resetting_check_email',);
        }
        not_pt_BR__RG__fos_user_resetting_check_email:

        // en__RG__fos_user_resetting_check_email
        if ($pathinfo === '/en/central-do-cliente/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
        }
        not_en__RG__fos_user_resetting_check_email:

        // pt_BR__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/central-do-cliente/resetting/reset') && preg_match('#^/central\\-do\\-cliente/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt_BR__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__fos_user_resetting_reset:

        // en__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/en/central-do-cliente/resetting/reset') && preg_match('#^/en/central\\-do\\-cliente/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_resetting_reset:

        // pt_BR__RG__fos_user_change_password
        if ($pathinfo === '/central-do-cliente/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt_BR__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_change_password',);
        }
        not_pt_BR__RG__fos_user_change_password:

        // en__RG__fos_user_change_password
        if ($pathinfo === '/en/central-do-cliente/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
        }
        not_en__RG__fos_user_change_password:

        // pt_BR__RG__fos_user_security_check
        if ($pathinfo === '/central-do-cliente/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_security_check',);
        }

        // en__RG__fos_user_security_check
        if ($pathinfo === '/en/central-do-cliente/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
        }

        // pt_BR__RG__fos_user_security_logout
        if ($pathinfo === '/central-do-cliente/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__fos_user_security_logout',);
        }

        // en__RG__fos_user_security_logout
        if ($pathinfo === '/en/central-do-cliente/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }

        // pt_BR__RG__vostre_crm_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_crm_homepage')), array (  '_controller' => 'Vostre\\CRMBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'pt_BR',));
        }

        // en__RG__vostre_crm_homepage
        if (0 === strpos($pathinfo, '/en/hello') && preg_match('#^/en/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_crm_homepage')), array (  '_controller' => 'Vostre\\CRMBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // pt_BR__RG__vostre_local_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_local_homepage')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'pt_BR',));
        }

        // en__RG__vostre_local_homepage
        if (0 === strpos($pathinfo, '/en/hello') && preg_match('#^/en/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_local_homepage')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // pt_BR__RG__vostre_site_central_cliente_home
        if ($pathinfo === '/central-do-cliente/home') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_central_cliente_home',);
        }

        // en__RG__vostre_site_central_cliente_home
        if ($pathinfo === '/en/central-do-cliente/home') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_central_cliente_home',);
        }

        // pt_BR__RG__vostre_site_admin_paises
        if ($pathinfo === '/central-do-cliente/home/paises') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexPaisAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_admin_paises',);
        }

        // en__RG__vostre_site_admin_paises
        if ($pathinfo === '/en/central-do-cliente/home/paises') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexPaisAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_admin_paises',);
        }

        // pt_BR__RG__vostre_site_admin_paises_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/paises/cadastra') && preg_match('#^/central\\-do\\-cliente/home/paises/cadastra(?:/(?P<id_pais>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__vostre_site_admin_paises_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_paises_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\PaisController::cadastrarAction',  'id_pais' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_paises_cadastra:

        // en__RG__vostre_site_admin_paises_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/paises/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/paises/cadastra(?:/(?P<id_pais>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_site_admin_paises_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_paises_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\PaisController::cadastrarAction',  'id_pais' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_paises_cadastra:

        // pt_BR__RG__vostre_site_admin_estados
        if ($pathinfo === '/central-do-cliente/home/estados') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexEstadoAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_admin_estados',);
        }

        // en__RG__vostre_site_admin_estados
        if ($pathinfo === '/en/central-do-cliente/home/estados') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexEstadoAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_admin_estados',);
        }

        // pt_BR__RG__vostre_site_admin_estados_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/estados/cadastra') && preg_match('#^/central\\-do\\-cliente/home/estados/cadastra(?:/(?P<id_estado>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__vostre_site_admin_estados_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_estados_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\EstadoController::cadastrarAction',  'id_estado' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_estados_cadastra:

        // en__RG__vostre_site_admin_estados_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/estados/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/estados/cadastra(?:/(?P<id_estado>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_site_admin_estados_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_estados_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\EstadoController::cadastrarAction',  'id_estado' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_estados_cadastra:

        // pt_BR__RG__vostre_site_admin_locais
        if ($pathinfo === '/central-do-cliente/home/locais') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexLocalAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_admin_locais',);
        }

        // en__RG__vostre_site_admin_locais
        if ($pathinfo === '/en/central-do-cliente/home/locais') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexLocalAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_admin_locais',);
        }

        // pt_BR__RG__vostre_site_admin_locais_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/locais/cadastra') && preg_match('#^/central\\-do\\-cliente/home/locais/cadastra(?:/(?P<id_local>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__vostre_site_admin_locais_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_locais_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\LocalController::cadastrarAction',  'id_local' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_locais_cadastra:

        // en__RG__vostre_site_admin_locais_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/locais/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/locais/cadastra(?:/(?P<id_local>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_site_admin_locais_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_locais_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\LocalController::cadastrarAction',  'id_local' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_locais_cadastra:

        // pt_BR__RG__circular_site_admin_locais_form
        if (0 === strpos($pathinfo, '/local/form') && preg_match('#^/local/form(?:/(?P<id_local>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_locais_form')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\LocalController::formAction',  'id_local' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_admin_locais_form
        if (0 === strpos($pathinfo, '/en/local/form') && preg_match('#^/en/local/form(?:/(?P<id_local>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_locais_form')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\LocalController::formAction',  'id_local' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__vostre_site_admin_bairros
        if ($pathinfo === '/central-do-cliente/home/bairros') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexBairroAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_admin_bairros',);
        }

        // en__RG__vostre_site_admin_bairros
        if ($pathinfo === '/en/central-do-cliente/home/bairros') {
            return array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::indexBairroAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_admin_bairros',);
        }

        // pt_BR__RG__vostre_site_admin_bairros_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/bairros/cadastra') && preg_match('#^/central\\-do\\-cliente/home/bairros/cadastra(?:/(?P<id_bairro>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__vostre_site_admin_bairros_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_bairros_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\BairroController::cadastrarAction',  'id_bairro' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_bairros_cadastra:

        // en__RG__vostre_site_admin_bairros_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/bairros/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/bairros/cadastra(?:/(?P<id_bairro>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_site_admin_bairros_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_bairros_cadastra')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\BairroController::cadastrarAction',  'id_bairro' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_bairros_cadastra:

        // pt_BR__RG__circular_site_admin_bairros_form
        if (0 === strpos($pathinfo, '/bairro/form') && preg_match('#^/bairro/form(?:/(?P<id_bairro>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_bairros_form')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\BairroController::formAction',  'id_bairro' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_admin_bairros_form
        if (0 === strpos($pathinfo, '/en/bairro/form') && preg_match('#^/en/bairro/form(?:/(?P<id_bairro>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_bairros_form')), array (  '_controller' => 'Vostre\\LocalBundle\\Controller\\BairroController::formAction',  'id_bairro' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__vostre_site_admin_contato_exclui
        if (0 === strpos($pathinfo, '/central-do-cliente/home/contatos/exclui') && preg_match('#^/central\\-do\\-cliente/home/contatos/exclui(?:/(?P<id_contato>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__vostre_site_admin_contato_exclui;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_contato_exclui')), array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::excluirContatoAction',  'id_contato' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_contato_exclui:

        // en__RG__vostre_site_admin_contato_exclui
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/contatos/exclui') && preg_match('#^/en/central\\-do\\-cliente/home/contatos/exclui(?:/(?P<id_contato>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_site_admin_contato_exclui;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_contato_exclui')), array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::excluirContatoAction',  'id_contato' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_contato_exclui:

        // pt_BR__RG__vostre_site_admin_contato_carrega
        if (0 === strpos($pathinfo, '/central-do-cliente/home/contatos/carrega') && preg_match('#^/central\\-do\\-cliente/home/contatos/carrega(?:/(?P<id_contato>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__vostre_site_admin_contato_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_contato_carrega')), array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::carregarContatoAction',  'id_contato' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_contato_carrega:

        // en__RG__vostre_site_admin_contato_carrega
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/contatos/carrega') && preg_match('#^/en/central\\-do\\-cliente/home/contatos/carrega(?:/(?P<id_contato>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_admin_contato_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_contato_carrega')), array (  '_controller' => 'Vostre\\CentralBundle\\Controller\\CentralController::carregarContatoAction',  'id_contato' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_contato_carrega:

        // pt_BR__RG__vostre_site_admin_destaques
        if ($pathinfo === '/central-do-cliente/home/destaques') {
            return array (  '_controller' => 'VostreSiteBundle:Destaque:indexDestaque',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_admin_destaques',);
        }

        // en__RG__vostre_site_admin_destaques
        if ($pathinfo === '/en/central-do-cliente/home/destaques') {
            return array (  '_controller' => 'VostreSiteBundle:Destaque:indexDestaque',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_admin_destaques',);
        }

        // pt_BR__RG__vostre_site_admin_destaques_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/destaques/cadastra') && preg_match('#^/central\\-do\\-cliente/home/destaques/cadastra(?:/(?P<id_destaque>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__vostre_site_admin_destaques_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__vostre_site_admin_destaques_cadastra')), array (  '_controller' => 'VostreSiteBundle:Destaque:cadastrar',  'id_destaque' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__vostre_site_admin_destaques_cadastra:

        // en__RG__vostre_site_admin_destaques_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/destaques/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/destaques/cadastra(?:/(?P<id_destaque>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_site_admin_destaques_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_admin_destaques_cadastra')), array (  '_controller' => 'VostreSiteBundle:Destaque:cadastrar',  'id_destaque' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_admin_destaques_cadastra:

        // pt_BR__RG__circular_api_get_token
        if ($pathinfo === '/api/token') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\CircularRestController::getTokenAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_api_get_token',);
        }

        // en__RG__circular_api_get_token
        if ($pathinfo === '/en/api/token') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\CircularRestController::getTokenAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_api_get_token',);
        }

        // pt_BR__RG__circular_site_admin_horarios
        if ($pathinfo === '/central-do-cliente/home/horarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexHorarioAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_horarios',);
        }

        // en__RG__circular_site_admin_horarios
        if ($pathinfo === '/en/central-do-cliente/home/horarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexHorarioAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_horarios',);
        }

        // pt_BR__RG__circular_site_admin_horarios_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/horarios/cadastra') && preg_match('#^/central\\-do\\-cliente/home/horarios/cadastra(?:/(?P<id_horario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_horarios_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_horarios_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioController::cadastrarAction',  'id_horario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_horarios_cadastra:

        // en__RG__circular_site_admin_horarios_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/horarios/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/horarios/cadastra(?:/(?P<id_horario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_horarios_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_horarios_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioController::cadastrarAction',  'id_horario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_horarios_cadastra:

        // pt_BR__RG__circular_site_admin_paradas
        if ($pathinfo === '/central-do-cliente/home/paradas') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexParadaAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_paradas',);
        }

        // en__RG__circular_site_admin_paradas
        if ($pathinfo === '/en/central-do-cliente/home/paradas') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexParadaAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_paradas',);
        }

        // pt_BR__RG__circular_site_admin_paradas_form
        if (0 === strpos($pathinfo, '/central-do-cliente/home/paradas/form') && preg_match('#^/central\\-do\\-cliente/home/paradas/form(?:/(?P<id_parada>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_paradas_form')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::formAction',  'id_parada' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_admin_paradas_form
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/paradas/form') && preg_match('#^/en/central\\-do\\-cliente/home/paradas/form(?:/(?P<id_parada>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_paradas_form')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::formAction',  'id_parada' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_site_admin_paradas_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/paradas/cadastra') && preg_match('#^/central\\-do\\-cliente/home/paradas/cadastra(?:/(?P<id_parada>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_paradas_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_paradas_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::cadastrarAction',  'id_parada' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_paradas_cadastra:

        // en__RG__circular_site_admin_paradas_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/paradas/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/paradas/cadastra(?:/(?P<id_parada>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_paradas_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_paradas_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::cadastrarAction',  'id_parada' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_paradas_cadastra:

        // pt_BR__RG__circular_site_admin_empresas
        if ($pathinfo === '/central-do-cliente/home/empresas') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexEmpresaAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_empresas',);
        }

        // en__RG__circular_site_admin_empresas
        if ($pathinfo === '/en/central-do-cliente/home/empresas') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexEmpresaAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_empresas',);
        }

        // pt_BR__RG__circular_site_admin_empresas_form
        if (0 === strpos($pathinfo, '/central-do-cliente/home/empresas/form') && preg_match('#^/central\\-do\\-cliente/home/empresas/form(?:/(?P<id_empresa>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_empresas_form')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\EmpresaController::formAction',  'id_empresa' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_admin_empresas_form
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/empresas/form') && preg_match('#^/en/central\\-do\\-cliente/home/empresas/form(?:/(?P<id_empresa>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_empresas_form')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\EmpresaController::formAction',  'id_empresa' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_site_admin_empresas_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/empresas/cadastra') && preg_match('#^/central\\-do\\-cliente/home/empresas/cadastra(?:/(?P<id_empresa>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_empresas_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_empresas_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\EmpresaController::cadastrarAction',  'id_empresa' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_empresas_cadastra:

        // en__RG__circular_site_admin_empresas_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/empresas/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/empresas/cadastra(?:/(?P<id_empresa>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_empresas_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_empresas_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\EmpresaController::cadastrarAction',  'id_empresa' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_empresas_cadastra:

        // pt_BR__RG__circular_site_admin_itinerarios
        if ($pathinfo === '/central-do-cliente/home/itinerarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexItinerarioAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_itinerarios',);
        }

        // en__RG__circular_site_admin_itinerarios
        if ($pathinfo === '/en/central-do-cliente/home/itinerarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexItinerarioAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_itinerarios',);
        }

        // pt_BR__RG__circular_site_admin_itinerarios_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/itinerarios/cadastra') && preg_match('#^/central\\-do\\-cliente/home/itinerarios/cadastra(?:/(?P<id_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_itinerarios_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_itinerarios_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::cadastrarAction',  'id_itinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_itinerarios_cadastra:

        // en__RG__circular_site_admin_itinerarios_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/itinerarios/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/itinerarios/cadastra(?:/(?P<id_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_itinerarios_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_itinerarios_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::cadastrarAction',  'id_itinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_itinerarios_cadastra:

        // pt_BR__RG__circular_site_admin_itinerarios_carrega
        if (0 === strpos($pathinfo, '/central-do-cliente/home/itinerarios/carrega') && preg_match('#^/central\\-do\\-cliente/home/itinerarios/carrega(?:/(?P<id_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt_BR__RG__circular_site_admin_itinerarios_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_itinerarios_carrega')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::carregarAction',  'id_itinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_itinerarios_carrega:

        // en__RG__circular_site_admin_itinerarios_carrega
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/itinerarios/carrega') && preg_match('#^/en/central\\-do\\-cliente/home/itinerarios/carrega(?:/(?P<id_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__circular_site_admin_itinerarios_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_itinerarios_carrega')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::carregarAction',  'id_itinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_itinerarios_carrega:

        // pt_BR__RG__circular_site_admin_itinerarios_edita
        if (0 === strpos($pathinfo, '/central-do-cliente/home/itinerarios/edita') && preg_match('#^/central\\-do\\-cliente/home/itinerarios/edita(?:/(?P<id_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_itinerarios_edita;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_itinerarios_edita')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::editarAction',  'id_itinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_itinerarios_edita:

        // en__RG__circular_site_admin_itinerarios_edita
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/itinerarios/edita') && preg_match('#^/en/central\\-do\\-cliente/home/itinerarios/edita(?:/(?P<id_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_itinerarios_edita;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_itinerarios_edita')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::editarAction',  'id_itinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_itinerarios_edita:

        // pt_BR__RG__circular_site_admin_itinerarios_edita_tarifa
        if ($pathinfo === '/central-do-cliente/home/itinerarios/tarifa/edita') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt_BR__RG__circular_site_admin_itinerarios_edita_tarifa;
            }

            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::editarTarifaAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_itinerarios_edita_tarifa',);
        }
        not_pt_BR__RG__circular_site_admin_itinerarios_edita_tarifa:

        // en__RG__circular_site_admin_itinerarios_edita_tarifa
        if ($pathinfo === '/en/central-do-cliente/home/itinerarios/tarifa/edita') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__circular_site_admin_itinerarios_edita_tarifa;
            }

            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::editarTarifaAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_itinerarios_edita_tarifa',);
        }
        not_en__RG__circular_site_admin_itinerarios_edita_tarifa:

        // pt_BR__RG__circular_site_admin_horarios_itinerarios
        if ($pathinfo === '/central-do-cliente/home/horarios-itinerarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexHorarioItinerarioAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_horarios_itinerarios',);
        }

        // en__RG__circular_site_admin_horarios_itinerarios
        if ($pathinfo === '/en/central-do-cliente/home/horarios-itinerarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexHorarioItinerarioAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_horarios_itinerarios',);
        }

        // pt_BR__RG__circular_site_admin_horarios_itinerarios_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/horarios-itinerarios/cadastra') && preg_match('#^/central\\-do\\-cliente/home/horarios\\-itinerarios/cadastra(?:/(?P<id_horario_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_horarios_itinerarios_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_horarios_itinerarios_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioItinerarioController::cadastrarAction',  'id_horario_itinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_horarios_itinerarios_cadastra:

        // en__RG__circular_site_admin_horarios_itinerarios_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/horarios-itinerarios/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/horarios\\-itinerarios/cadastra(?:/(?P<id_horario_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_horarios_itinerarios_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_horarios_itinerarios_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioItinerarioController::cadastrarAction',  'id_horario_itinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_horarios_itinerarios_cadastra:

        // pt_BR__RG__circular_site_admin_horarios_itinerarios_carrega
        if (0 === strpos($pathinfo, '/central-do-cliente/home/horarios-itinerarios/carrega') && preg_match('#^/central\\-do\\-cliente/home/horarios\\-itinerarios/carrega(?:/(?P<idItinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt_BR__RG__circular_site_admin_horarios_itinerarios_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_horarios_itinerarios_carrega')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioItinerarioController::carregarAction',  'idItinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_horarios_itinerarios_carrega:

        // en__RG__circular_site_admin_horarios_itinerarios_carrega
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/horarios-itinerarios/carrega') && preg_match('#^/en/central\\-do\\-cliente/home/horarios\\-itinerarios/carrega(?:/(?P<idItinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__circular_site_admin_horarios_itinerarios_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_horarios_itinerarios_carrega')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioItinerarioController::carregarAction',  'idItinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_horarios_itinerarios_carrega:

        // pt_BR__RG__circular_site_admin_horarios_itinerarios_edita
        if (0 === strpos($pathinfo, '/central-do-cliente/home/horarios-itinerarios/edita') && preg_match('#^/central\\-do\\-cliente/home/horarios\\-itinerarios/edita(?:/(?P<id_horario_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_horarios_itinerarios_edita;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_horarios_itinerarios_edita')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioItinerarioController::editarAction',  'id_horario_itinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_horarios_itinerarios_edita:

        // en__RG__circular_site_admin_horarios_itinerarios_edita
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/horarios-itinerarios/edita') && preg_match('#^/en/central\\-do\\-cliente/home/horarios\\-itinerarios/edita(?:/(?P<id_horario_itinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_horarios_itinerarios_edita;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_horarios_itinerarios_edita')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\HorarioItinerarioController::editarAction',  'id_horario_itinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_horarios_itinerarios_edita:

        // pt_BR__RG__circular_site_admin_mensagens
        if ($pathinfo === '/central-do-cliente/home/mensagens') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexMensagemAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_mensagens',);
        }

        // en__RG__circular_site_admin_mensagens
        if ($pathinfo === '/en/central-do-cliente/home/mensagens') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexMensagemAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_mensagens',);
        }

        // pt_BR__RG__circular_site_admin_mensagens_form
        if (0 === strpos($pathinfo, '/central-do-cliente/home/mensagens/form') && preg_match('#^/central\\-do\\-cliente/home/mensagens/form(?:/(?P<id_mensagem>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_mensagens_form')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemController::formAction',  'id_mensagem' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_admin_mensagens_form
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/mensagens/form') && preg_match('#^/en/central\\-do\\-cliente/home/mensagens/form(?:/(?P<id_mensagem>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_mensagens_form')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemController::formAction',  'id_mensagem' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_site_admin_mensagens_cadastra
        if (0 === strpos($pathinfo, '/central-do-cliente/home/mensagens/cadastra') && preg_match('#^/central\\-do\\-cliente/home/mensagens/cadastra(?:/(?P<id_mensagem>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_mensagens_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_mensagens_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemController::cadastrarAction',  'id_mensagem' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_mensagens_cadastra:

        // en__RG__circular_site_admin_mensagens_cadastra
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/mensagens/cadastra') && preg_match('#^/en/central\\-do\\-cliente/home/mensagens/cadastra(?:/(?P<id_mensagem>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_mensagens_cadastra;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_mensagens_cadastra')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemController::cadastrarAction',  'id_mensagem' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_mensagens_cadastra:

        // pt_BR__RG__circular_site_admin_secoes_itinerarios
        if ($pathinfo === '/central-do-cliente/home/secoes-itinerarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexSecaoItinerarioAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_admin_secoes_itinerarios',);
        }

        // en__RG__circular_site_admin_secoes_itinerarios
        if ($pathinfo === '/en/central-do-cliente/home/secoes-itinerarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\AdminController::indexSecaoItinerarioAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_admin_secoes_itinerarios',);
        }

        // pt_BR__RG__circular_site_admin_secoes_itinerarios_carrega
        if (0 === strpos($pathinfo, '/central-do-cliente/home/secoes-itinerarios/carrega') && preg_match('#^/central\\-do\\-cliente/home/secoes\\-itinerarios/carrega(?:/(?P<idItinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt_BR__RG__circular_site_admin_secoes_itinerarios_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_secoes_itinerarios_carrega')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\SecaoItinerarioController::carregarAction',  'idItinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_secoes_itinerarios_carrega:

        // en__RG__circular_site_admin_secoes_itinerarios_carrega
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/secoes-itinerarios/carrega') && preg_match('#^/en/central\\-do\\-cliente/home/secoes\\-itinerarios/carrega(?:/(?P<idItinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__circular_site_admin_secoes_itinerarios_carrega;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_secoes_itinerarios_carrega')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\SecaoItinerarioController::carregarAction',  'idItinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_secoes_itinerarios_carrega:

        // pt_BR__RG__circular_site_admin_secoes_itinerarios_edita
        if (0 === strpos($pathinfo, '/central-do-cliente/home/secoes-itinerarios/edita') && preg_match('#^/central\\-do\\-cliente/home/secoes\\-itinerarios/edita(?:/(?P<idItinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt_BR__RG__circular_site_admin_secoes_itinerarios_edita;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_admin_secoes_itinerarios_edita')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\SecaoItinerarioController::editarAction',  'idItinerario' => -1,  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__circular_site_admin_secoes_itinerarios_edita:

        // en__RG__circular_site_admin_secoes_itinerarios_edita
        if (0 === strpos($pathinfo, '/en/central-do-cliente/home/secoes-itinerarios/edita') && preg_match('#^/en/central\\-do\\-cliente/home/secoes\\-itinerarios/edita(?:/(?P<idItinerario>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__circular_site_admin_secoes_itinerarios_edita;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_admin_secoes_itinerarios_edita')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\SecaoItinerarioController::editarAction',  'idItinerario' => -1,  '_locale' => 'en',));
        }
        not_en__RG__circular_site_admin_secoes_itinerarios_edita:

        // pt_BR__RG__vostre_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pt_BR__RG__vostre_site_homepage');
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_homepage',);
        }

        // en__RG__vostre_site_homepage
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__vostre_site_homepage');
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_homepage',);
        }

        // pt_BR__RG__vostre_site_servicos
        if ($pathinfo === '/servicos') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_servicos',);
        }

        // en__RG__vostre_site_servicos
        if ($pathinfo === '/en/servicos') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_servicos',);
        }

        // pt_BR__RG__vostre_site_portfolio
        if ($pathinfo === '/portfolio') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_portfolio',);
        }

        // en__RG__vostre_site_portfolio
        if ($pathinfo === '/en/portfolio') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_portfolio',);
        }

        // pt_BR__RG__vostre_site_contato
        if ($pathinfo === '/contato') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_contato',);
        }

        // en__RG__vostre_site_contato
        if ($pathinfo === '/en/contato') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_contato',);
        }

        // pt_BR__RG__vostre_site_sobre
        if ($pathinfo === '/sobre') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_sobre',);
        }

        // en__RG__vostre_site_sobre
        if ($pathinfo === '/en/sobre') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_sobre',);
        }

        // pt_BR__RG__vostre_site_central_cliente
        if ($pathinfo === '/central-do-cliente') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::centralAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__vostre_site_central_cliente',);
        }

        // en__RG__vostre_site_central_cliente
        if ($pathinfo === '/en/central-do-cliente') {
            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::centralAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_central_cliente',);
        }

        // pt_BR__RG__circular_site
        if ($pathinfo === '/circular') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::coverAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site',);
        }

        // en__RG__circular_site
        if ($pathinfo === '/en/circular') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::coverAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site',);
        }

        // pt_BR__RG__circular_site_consulta
        if ($pathinfo === '/circular/consulta') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::consultaAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_consulta',);
        }

        // en__RG__circular_site_consulta
        if ($pathinfo === '/en/circular/consulta') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::consultaAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_consulta',);
        }

        // pt_BR__RG__circular_site_consulta_todos_horarios
        if ($pathinfo === '/circular/consulta/todos-horarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::consultaTodosHorariosAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_consulta_todos_horarios',);
        }

        // en__RG__circular_site_consulta_todos_horarios
        if ($pathinfo === '/en/circular/consulta/todos-horarios') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::consultaTodosHorariosAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_consulta_todos_horarios',);
        }

        // pt_BR__RG__circular_site_lista_itinerarios_parada
        if (0 === strpos($pathinfo, '/parada') && preg_match('#^/parada/(?P<id_parada>[^/]++)/itinerarios$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_lista_itinerarios_parada')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::itinerariosAction',  'id_parada' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_lista_itinerarios_parada
        if (0 === strpos($pathinfo, '/en/parada') && preg_match('#^/en/parada/(?P<id_parada>[^/]++)/itinerarios$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_lista_itinerarios_parada')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::itinerariosAction',  'id_parada' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_site_lista_paradas_itinerario
        if (0 === strpos($pathinfo, '/itinerario') && preg_match('#^/itinerario/(?P<id_itinerario>[^/]++)/paradas$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_lista_paradas_itinerario')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::paradasItinerarioAction',  'id_itinerario' => -1,  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_lista_paradas_itinerario
        if (0 === strpos($pathinfo, '/en/itinerario') && preg_match('#^/en/itinerario/(?P<id_itinerario>[^/]++)/paradas$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_lista_paradas_itinerario')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaController::paradasItinerarioAction',  'id_itinerario' => -1,  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_site_itinerario_todos_horarios
        if (0 === strpos($pathinfo, '/itinerario') && preg_match('#^/itinerario/(?P<id_itinerario>[^/]++)/horarios/(?P<hora>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_site_itinerario_todos_horarios')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::todosHorariosAction',  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_site_itinerario_todos_horarios
        if (0 === strpos($pathinfo, '/en/itinerario') && preg_match('#^/en/itinerario/(?P<id_itinerario>[^/]++)/horarios/(?P<hora>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_site_itinerario_todos_horarios')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioController::todosHorariosAction',  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_site_contato
        if ($pathinfo === '/circular/contato') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'pt_BR',  '_route' => 'pt_BR__RG__circular_site_contato',);
        }

        // en__RG__circular_site_contato
        if ($pathinfo === '/en/circular/contato') {
            return array (  '_controller' => 'Circular\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'en',  '_route' => 'en__RG__circular_site_contato',);
        }

        // pt_BR__RG__api_set_dados
        if (0 === strpos($pathinfo, '/api/dados') && preg_match('#^/api/dados/(?P<hash>[^/]++)/set(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PATCH') {
                $allow[] = 'PATCH';
                goto not_pt_BR__RG__api_set_dados;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__api_set_dados')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaRestController::setDadosAction',  '_format' => 'json',  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__api_set_dados:

        // en__RG__api_set_dados
        if (0 === strpos($pathinfo, '/en/api/dados') && preg_match('#^/en/api/dados/(?P<hash>[^/]++)/set(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PATCH') {
                $allow[] = 'PATCH';
                goto not_en__RG__api_set_dados;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_set_dados')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaRestController::setDadosAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_set_dados:

        // pt_BR__RG__api_get_itinerarios
        if (0 === strpos($pathinfo, '/api/itinerarios') && preg_match('#^/api/itinerarios(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__api_get_itinerarios;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__api_get_itinerarios')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioRestController::getItinerariosAction',  '_format' => 'json',  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__api_get_itinerarios:

        // en__RG__api_get_itinerarios
        if (0 === strpos($pathinfo, '/en/api/itinerarios') && preg_match('#^/en/api/itinerarios(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_itinerarios;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_get_itinerarios')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ItinerarioRestController::getItinerariosAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_get_itinerarios:

        // pt_BR__RG__api_get_dados
        if (0 === strpos($pathinfo, '/api/dados') && preg_match('#^/api/dados/(?P<hash>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt_BR__RG__api_get_dados;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__api_get_dados')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'pt_BR',));
        }
        not_pt_BR__RG__api_get_dados:

        // en__RG__api_get_dados
        if (0 === strpos($pathinfo, '/en/api/dados') && preg_match('#^/en/api/dados/(?P<hash>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_dados;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_get_dados')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_get_dados:

        // pt_BR__RG__circular_api_get_dados
        if (0 === strpos($pathinfo, '/api/circular/recebe-dados') && preg_match('#^/api/circular/recebe\\-dados/(?P<hash>[^/]++)/(?P<data>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_api_get_dados')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\CircularRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_api_get_dados
        if (0 === strpos($pathinfo, '/en/api/circular/recebe-dados') && preg_match('#^/en/api/circular/recebe\\-dados/(?P<hash>[^/]++)/(?P<data>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_api_get_dados')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\CircularRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_api_get_paradas
        if (0 === strpos($pathinfo, '/api/recebe-dados/paradas') && preg_match('#^/api/recebe\\-dados/paradas/(?P<hash>[^/]++)/(?P<data>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_api_get_paradas')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_api_get_paradas
        if (0 === strpos($pathinfo, '/en/api/recebe-dados/paradas') && preg_match('#^/en/api/recebe\\-dados/paradas/(?P<hash>[^/]++)/(?P<data>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_api_get_paradas')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\ParadaRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'en',));
        }

        // pt_BR__RG__circular_api_get_mensagens
        if (0 === strpos($pathinfo, '/api/recebe-dados/mensagens') && preg_match('#^/api/recebe\\-dados/mensagens/(?P<hash>[^/]++)/(?P<data>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt_BR__RG__circular_api_get_mensagens')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'pt_BR',));
        }

        // en__RG__circular_api_get_mensagens
        if (0 === strpos($pathinfo, '/en/api/recebe-dados/mensagens') && preg_match('#^/en/api/recebe\\-dados/mensagens/(?P<hash>[^/]++)/(?P<data>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__circular_api_get_mensagens')), array (  '_controller' => 'Circular\\SiteBundle\\Controller\\MensagemRestController::getDadosAction',  '_format' => 'json',  '_locale' => 'en',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
