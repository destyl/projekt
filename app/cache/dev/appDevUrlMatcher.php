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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/work')) {
            // praca_zaliczeniowa_praca_base
            if (rtrim($pathinfo, '/') === '/work') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'praca_zaliczeniowa_praca_base');
                }

                return array (  '_controller' => 'Praca\\zaliczeniowaBundle\\Controller\\PracaController::baseAction',  '_route' => 'praca_zaliczeniowa_praca_base',);
            }

            // rejestracja
            if ($pathinfo === '/work/rejestracja') {
                return array (  '_controller' => 'Praca\\zaliczeniowaBundle\\Controller\\PracaController::registerAction',  '_route' => 'rejestracja',);
            }

        }

        if (0 === strpos($pathinfo, '/panTadeusz')) {
            // index
            if (rtrim($pathinfo, '/') === '/panTadeusz') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'index');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Default:index.html.twig',  '_route' => 'index',);
            }

            if (0 === strpos($pathinfo, '/panTadeusz/k')) {
                // k1
                if ($pathinfo === '/panTadeusz/k1') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k1.html.twig',  '_route' => 'k1',);
                }

                // k2
                if ($pathinfo === '/panTadeusz/k2') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k2.html.twig',  '_route' => 'k2',);
                }

                // k3
                if ($pathinfo === '/panTadeusz/k3') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k3.html.twig',  '_route' => 'k3',);
                }

                // k4
                if ($pathinfo === '/panTadeusz/k4') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k4.html.twig',  '_route' => 'k4',);
                }

                // k5
                if ($pathinfo === '/panTadeusz/k5') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k5.html.twig',  '_route' => 'k5',);
                }

                // k6
                if ($pathinfo === '/panTadeusz/k6') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k6.html.twig',  '_route' => 'k6',);
                }

                // k7
                if ($pathinfo === '/panTadeusz/k7') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k7.html.twig',  '_route' => 'k7',);
                }

                // k8
                if ($pathinfo === '/panTadeusz/k8') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k8.html.twig',  '_route' => 'k8',);
                }

                // k9
                if ($pathinfo === '/panTadeusz/k9') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k9.html.twig',  '_route' => 'k9',);
                }

                if (0 === strpos($pathinfo, '/panTadeusz/k1')) {
                    // k10
                    if ($pathinfo === '/panTadeusz/k10') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k10.html.twig',  '_route' => 'k10',);
                    }

                    // k11
                    if ($pathinfo === '/panTadeusz/k11') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k11.html.twig',  '_route' => 'k11',);
                    }

                    // k12
                    if ($pathinfo === '/panTadeusz/k12') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'MickiewiczTadeuczBundle:Pages:k12.html.twig',  '_route' => 'k12',);
                    }

                }

            }

        }

        // bartek_hello_homepage
        if (0 === strpos($pathinfo, '/hw/hello-world.html') && preg_match('#^/hw/hello\\-world\\.html/(?P<imie>[^/]++)(?:/(?P<nazwisko>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bartek_hello_homepage')), array (  'nazwisko' => '',  '_controller' => 'Bartek\\HelloBundle\\Controller\\DefaultController::indexAction',));
        }

        // s175423_homepage
        if (0 === strpos($pathinfo, '/test/hello') && preg_match('#^/test/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 's175423_homepage')), array (  '_controller' => 's175423\\Bundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
