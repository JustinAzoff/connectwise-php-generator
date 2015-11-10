<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Service Ticket API
 */
class ServiceTicketApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetActivity'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivity',
        'ApiCredentials'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetActivityResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityResponse',
        'Activity'                                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Activity',
        'ActivityDuration'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityDuration',
        'ContactInformation'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactInformation',
        'LoadActivity'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivity',
        'LoadActivityResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivityResponse',
        'AddActivity'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivity',
        'AddActivityResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivityResponse',
        'UpdateActivity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivity',
        'UpdateActivityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivityResponse',
        'AddOrUpdateActivity'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivity',
        'AddOrUpdateActivityResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityResponse',
        'DeleteActivity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivity',
        'DeleteActivityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityResponse',
        'FindActivities'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivities',
        'ArrayOfString'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindActivitiesResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivitiesResponse',
        'ArrayOfActivityFindResult'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfActivityFindResult',
        'ActivityFindResult'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityFindResult',
        'GetAgreementSite'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSite',
        'GetAgreementSiteResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSiteResponse',
        'AgreementSite'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSite',
        'AddOrUpdateAgreementSite'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSite',
        'AddOrUpdateAgreementSiteResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSiteResponse',
        'FindAgreementSites'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSites',
        'FindAgreementSitesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSitesResponse',
        'ArrayOfAgreementSiteFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementSiteFindResult',
        'AgreementSiteFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSiteFindResult',
        'DeleteAgreementSite'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSite',
        'DeleteAgreementSiteResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSiteResponse',
        'GetAgreementWorkType'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkType',
        'GetAgreementWorkTypeResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeResponse',
        'AgreementWorkType'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkType',
        'AddOrUpdateAgreementWorkType'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkType',
        'AddOrUpdateAgreementWorkTypeResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkTypeResponse',
        'FindAgreementWorkTypes'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypes',
        'FindAgreementWorkTypesResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypesResponse',
        'ArrayOfAgreementWorkTypeFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeFindResult',
        'AgreementWorkTypeFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeFindResult',
        'DeleteAgreementWorkType'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkType',
        'DeleteAgreementWorkTypeResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkTypeResponse',
        'GetAgreementWorkRole'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRole',
        'GetAgreementWorkRoleResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleResponse',
        'AgreementWorkRole'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRole',
        'AddOrUpdateAgreementWorkRole'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRole',
        'AddOrUpdateAgreementWorkRoleResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRoleResponse',
        'FindAgreementWorkRoles'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRoles',
        'FindAgreementWorkRolesResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRolesResponse',
        'ArrayOfAgreementWorkRoleFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleFindResult',
        'AgreementWorkRoleFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleFindResult',
        'DeleteAgreementWorkRole'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRole',
        'DeleteAgreementWorkRoleResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRoleResponse',
        'GetAgreementAdjustment'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustment',
        'GetAgreementAdjustmentResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustmentResponse',
        'AgreementAdjustment'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustment',
        'AddOrUpdateAgreementAdjustment'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustment',
        'AddOrUpdateAgreementAdjustmentResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustmentResponse',
        'FindAgreementAdjustments'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustments',
        'FindAgreementAdjustmentsResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustmentsResponse',
        'ArrayOfAgreementAdjustmentFindResult'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdjustmentFindResult',
        'AgreementAdjustmentFindResult'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustmentFindResult',
        'DeleteAgreementAdjustment'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustment',
        'DeleteAgreementAdjustmentResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustmentResponse',
        'GetAgreement'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreement',
        'GetAgreementResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementResponse',
        'Agreement'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Agreement',
        'DeleteAgreement'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreement',
        'DeleteAgreementResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementResponse',
        'FindAgreements'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreements',
        'FindAgreementsResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementsResponse',
        'ArrayOfAgreementFindResult'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementFindResult',
        'AgreementFindResult'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementFindResult',
        'AddOrUpdateAgreement'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreement',
        'AddOrUpdateAgreementResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementResponse',
        'GetAgreementAddition'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAddition',
        'GetAgreementAdditionResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdditionResponse',
        'AgreementAddition'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAddition',
        'AdditionsProduct'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AdditionsProduct',
        'AddOrUpdateAgreementAddition'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAddition',
        'AddOrUpdateAgreementAdditionResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdditionResponse',
        'FindAgreementAdditions'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditions',
        'FindAgreementAdditionsResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditionsResponse',
        'ArrayOfAgreementAdditionFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdditionFindResult',
        'AgreementAdditionFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdditionFindResult',
        'DeleteAgreementAddition'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAddition',
        'DeleteAgreementAdditionResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdditionResponse',
        'GetAgreementWorkRoleExclusion'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusion',
        'GetAgreementWorkRoleExclusionResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusionResponse',
        'AgreementWorkRoleExclusion'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleExclusion',
        'GetAgreementWorkTypeExclusion'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusion',
        'GetAgreementWorkTypeExclusionResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusionResponse',
        'AgreementWorkTypeExclusion'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeExclusion',
        'FindAgreementExclusions'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusions',
        'FindAgreementExclusionsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusionsResponse',
        'ArrayOfAgreementExclusionFindResult'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementExclusionFindResult',
        'AgreementExclusionFindResult'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementExclusionFindResult',
        'AddOrRemoveAgreementWorkTypeExclusion'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusion',
        'ArrayOfAgreementWorkTypeExclusion'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeExclusion',
        'AddOrRemoveAgreementWorkTypeExclusionResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusionResponse',
        'AddOrRemoveAgreementWorkRoleExclusion'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusion',
        'ArrayOfAgreementWorkRoleExclusion'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleExclusion',
        'AddOrRemoveAgreementWorkRoleExclusionResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusionResponse',
        'GetAgreementBoardDefault'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefault',
        'GetAgreementBoardDefaultResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefaultResponse',
        'AgreementBoardDefault'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefault',
        'FindAgreementBoardDefaults'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaults',
        'FindAgreementBoardDefaultsResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaultsResponse',
        'ArrayOfAgreementBoardDefaultFindResult'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementBoardDefaultFindResult',
        'AgreementBoardDefaultFindResult'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefaultFindResult',
        'AddOrUpdateAgreementBoardDefault'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefault',
        'AddOrUpdateAgreementBoardDefaultResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefaultResponse',
        'DeleteAgreementBoardDefault'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefault',
        'DeleteAgreementBoardDefaultResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefaultResponse',
        'GetCompany'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompany',
        'GetCompanyResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyResponse',
        'Company'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Company',
        'CompanyAddress'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfCompanyAddress'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyAddress',
        'LoadCompany'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompany',
        'LoadCompanyResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompanyResponse',
        'AddCompany'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompany',
        'AddCompanyResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompanyResponse',
        'UpdateCompany'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompany',
        'UpdateCompanyResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyResponse',
        'AddOrUpdateCompany'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompany',
        'AddOrUpdateCompanyResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyResponse',
        'DeleteCompany'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompany',
        'DeleteCompanyResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyResponse',
        'FindCompanies'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompanies',
        'FindCompaniesResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompaniesResponse',
        'ArrayOfCompanyFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyFindResult',
        'CompanyFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyFindResult',
        'SetCompanyDefaultContact'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContact',
        'SetCompanyDefaultContactResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContactResponse',
        'GetCompanyProfile'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfile',
        'GetCompanyProfileResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfileResponse',
        'CompanyProfile'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyProfile',
        'UpdateCompanyProfile'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfile',
        'UpdateCompanyProfileResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfileResponse',
        'GetAllCompanyNotes'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotes',
        'GetAllCompanyNotesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotesResponse',
        'ArrayOfNote'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
        'GetCompanyNote'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNote',
        'GetCompanyNoteResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNoteResponse',
        'AddOrUpdateCompanyNote'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNote',
        'AddOrUpdateCompanyNoteResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNoteResponse',
        'DeleteCompanyNote'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNote',
        'DeleteCompanyNoteResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNoteResponse',
        'AddOrUpdateCompanyCustomField'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomField',
        'ArrayOfUserDefinedCustomField'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfUserDefinedCustomField',
        'UserDefinedCustomField'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UserDefinedCustomField',
        'AddOrUpdateCompanyCustomFieldResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomFieldResponse',
        'GetCompanyTeam'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeam',
        'GetCompanyTeamResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeamResponse',
        'CompanyTeam'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyTeam',
        'AddOrUpdateCompanyTeam'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeam',
        'AddOrUpdateCompanyTeamResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeamResponse',
        'DeleteCompanyTeam'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeam',
        'DeleteCompanyTeamResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeamResponse',
        'GetConfiguration'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfiguration',
        'GetConfigurationResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationResponse',
        'Configuration'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Configuration',
        'ArrayOfConfigurationQuestion'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationQuestion',
        'ConfigurationQuestion'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationQuestion',
        'VendorCompany'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\VendorCompany',
        'ManufacturerCompany'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManufacturerCompany',
        'LoadConfiguration'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfiguration',
        'LoadConfigurationResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationResponse',
        'FindConfigurations'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurations',
        'FindConfigurationsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationsResponse',
        'ArrayOfConfigurationFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationFindResult',
        'ConfigurationFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationFindResult',
        'FindConfigurationCount'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCount',
        'FindConfigurationCountResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCountResponse',
        'AddConfiguration'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfiguration',
        'AddConfigurationResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationResponse',
        'UpdateConfiguration'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfiguration',
        'UpdateConfigurationResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationResponse',
        'AddOrUpdateConfiguration'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfiguration',
        'AddOrUpdateConfigurationResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationResponse',
        'DeleteConfiguration'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfiguration',
        'DeleteConfigurationResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationResponse',
        'FindConfigurationTypes'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypes',
        'FindConfigurationTypesResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypesResponse',
        'ArrayOfConfigurationTypeFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeFindResult',
        'ConfigurationTypeFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeFindResult',
        'GetConfigurationType'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationType',
        'GetConfigurationTypeResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationTypeResponse',
        'ConfigurationType'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationType',
        'ArrayOfConfigurationTypeQuestion'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeQuestion',
        'ConfigurationTypeQuestion'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeQuestion',
        'ArrayOfPossibleResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPossibleResponse',
        'PossibleResponse'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PossibleResponse',
        'LoadConfigurationType'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationType',
        'LoadConfigurationTypeResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationTypeResponse',
        'UpdateConfigurationType'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationType',
        'UpdateConfigurationTypeResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationTypeResponse',
        'AddConfigurationType'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationType',
        'AddConfigurationTypeResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationTypeResponse',
        'AddOrUpdateConfigurationType'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationType',
        'AddOrUpdateConfigurationTypeResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationTypeResponse',
        'DeleteConfigurationType'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationType',
        'DeleteConfigurationTypeResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeResponse',
        'DeleteConfigurationTypeQuestion'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestion',
        'DeleteConfigurationTypeQuestionResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestionResponse',
        'DeletePossibleResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponse',
        'DeletePossibleResponseResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponseResponse',
        'GetAllContactNotes'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotes',
        'GetAllContactNotesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotesResponse',
        'GetContactNote'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactNote',
        'GetContactNoteResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactNoteResponse',
        'AddOrUpdateContactNote'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactNote',
        'AddOrUpdateContactNoteResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactNoteResponse',
        'DeleteNote'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteNote',
        'DeleteNoteResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteNoteResponse',
        'GetAllContactCommunicationItems'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactCommunicationItems',
        'GetAllContactCommunicationItemsResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactCommunicationItemsResponse',
        'ArrayOfContactCommunicationItem'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactCommunicationItem',
        'ContactCommunicationItem'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactCommunicationItem',
        'GetAllCommunicationTypesAndDescription'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCommunicationTypesAndDescription',
        'GetAllCommunicationTypesAndDescriptionResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCommunicationTypesAndDescriptionResponse',
        'ArrayOfCommunicationTypeDescriptions'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCommunicationTypeDescriptions',
        'CommunicationTypeDescriptions'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CommunicationTypeDescriptions',
        'GetContactCommunicationItem'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactCommunicationItem',
        'GetContactCommunicationItemResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactCommunicationItemResponse',
        'AddOrUpdateContactCommunicationItem'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactCommunicationItem',
        'AddOrUpdateContactCommunicationItemResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactCommunicationItemResponse',
        'DeleteContactCommunicationItem'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactCommunicationItem',
        'DeleteContactCommunicationItemResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactCommunicationItemResponse',
        'SetDefaultContactCommunicationItem'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetDefaultContactCommunicationItem',
        'SetDefaultContactCommunicationItemResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetDefaultContactCommunicationItemResponse',
        'GetContact'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContact',
        'GetContactResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactResponse',
        'Contact'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Contact',
        'CompanyAddressInfo'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddressInfo',
        'LoadContact'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadContact',
        'LoadContactResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadContactResponse',
        'AddOrUpdateContact'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContact',
        'AddOrUpdateContactResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactResponse',
        'DeleteContact'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContact',
        'DeleteContactResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactResponse',
        'FindContacts'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContacts',
        'FindContactsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactsResponse',
        'ArrayOfContactFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactFindResult',
        'ContactFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactFindResult',
        'FindContactCount'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactCount',
        'FindContactCountResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactCountResponse',
        'AddContactToGroup'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddContactToGroup',
        'AddContactToGroupResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddContactToGroupResponse',
        'RemoveContactFromGroup'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveContactFromGroup',
        'RemoveContactFromGroupResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveContactFromGroupResponse',
        'Authenticate'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Authenticate',
        'AuthenticateResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateResponse',
        'AuthenticationResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticationResponse',
        'GetPortalConfigSettings'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalConfigSettings',
        'GetPortalConfigSettingsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalConfigSettingsResponse',
        'PortalConfigSettings'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalConfigSettings',
        'PortalImage'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalImage',
        'PortalImageBase'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalImageBase',
        'CountryCaption'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CountryCaption',
        'MouseOverData'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MouseOverData',
        'LongDescription'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LongDescription',
        'GetPortalSecurity'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalSecurity',
        'GetPortalSecurityResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalSecurityResponse',
        'ArrayOfPortalSecurity'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPortalSecurity',
        'PortalSecurity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalSecurity',
        'GetPortalLoginCustomizations'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalLoginCustomizations',
        'GetPortalLoginCustomizationsResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalLoginCustomizationsResponse',
        'PortalLoginCustomization'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalLoginCustomization',
        'RequestPassword'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RequestPassword',
        'RequestPasswordResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RequestPasswordResponse',
        'GetAvatarImage'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAvatarImage',
        'GetAvatarImageResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAvatarImageResponse',
        'GetPresenceStatus'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPresenceStatus',
        'GetPresenceStatusResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPresenceStatusResponse',
        'ContactPresence'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactPresence',
        'UpdatePresenceStatus'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePresenceStatus',
        'UpdatePresenceStatusResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePresenceStatusResponse',
        'AddDocuments'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocuments',
        'ArrayOfDocumentInfo'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentInfo',
        'DocumentInfo'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentInfo',
        'AddDocumentsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocumentsResponse',
        'GetDocument'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocument',
        'GetDocumentResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocumentResponse',
        'DeleteDocument'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocument',
        'DeleteDocumentResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocumentResponse',
        'FindDocuments'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocuments',
        'FindDocumentsResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocumentsResponse',
        'ArrayOfDocumentFindResult'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentFindResult',
        'DocumentFindResult'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentFindResult',
        'GetInvoice'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoice',
        'GetInvoiceResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceResponse',
        'Invoice'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Invoice',
        'ArrayOfExpenseDetail'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfExpenseDetail',
        'ExpenseDetail'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ExpenseDetail',
        'ArrayOfProductDetail'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDetail',
        'ProductDetail'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDetail',
        'ArrayOfTimeDetail'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTimeDetail',
        'TimeDetail'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TimeDetail',
        'ArrayOfSalesTaxDetail'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesTaxDetail',
        'SalesTaxDetail'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesTaxDetail',
        'ArrayOfAgreementDetail'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementDetail',
        'AgreementDetail'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementDetail',
        'LoadInvoice'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadInvoice',
        'LoadInvoiceResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadInvoiceResponse',
        'GetInvoiceByInvoiceNumber'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceByInvoiceNumber',
        'GetInvoiceByInvoiceNumberResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceByInvoiceNumberResponse',
        'FindInvoices'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoices',
        'FindInvoicesResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoicesResponse',
        'ArrayOfInvoiceFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInvoiceFindResult',
        'InvoiceFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\InvoiceFindResult',
        'FindInvoiceCount'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoiceCount',
        'FindInvoiceCountResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoiceCountResponse',
        'GetInvoicePdf'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoicePdf',
        'GetInvoicePdfResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoicePdfResponse',
        'GetSpecialInvoice'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoice',
        'GetSpecialInvoiceResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceResponse',
        'SpecialInvoice'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoice',
        'ApplyTo'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApplyTo',
        'ArrayOfSpecialInvoiceProduct'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpecialInvoiceProduct',
        'SpecialInvoiceProduct'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoiceProduct',
        'ProductItem'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductItem',
        'ArrayOfComponent'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfComponent',
        'Component'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Component',
        'GetSpecialInvoiceByInvoiceNumber'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceByInvoiceNumber',
        'GetSpecialInvoiceByInvoiceNumberResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceByInvoiceNumberResponse',
        'AddOrUpdateSpecialInvoice'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoice',
        'AddOrUpdateSpecialInvoiceResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceResponse',
        'DeleteSpecialInvoice'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoice',
        'DeleteSpecialInvoiceResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceResponse',
        'DeleteSpecialInvoiceByInvoiceNumber'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceByInvoiceNumber',
        'DeleteSpecialInvoiceByInvoiceNumberResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceByInvoiceNumberResponse',
        'GetApplyToForCompanyByType'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetApplyToForCompanyByType',
        'GetApplyToForCompanyByTypeResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetApplyToForCompanyByTypeResponse',
        'ArrayOfApplyTo'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfApplyTo',
        'FindSpecialInvoices'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindSpecialInvoices',
        'FindSpecialInvoicesResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindSpecialInvoicesResponse',
        'ArrayOfSpecialInvoiceFindResult'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpecialInvoiceFindResult',
        'SpecialInvoiceFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoiceFindResult',
        'AddOrUpdateSpecialInvoiceProduct'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceProduct',
        'AddOrUpdateSpecialInvoiceProductResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceProductResponse',
        'DeleteSpecialInvoiceProduct'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceProduct',
        'DeleteSpecialInvoiceProductResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceProductResponse',
        'UpdateManagedDevices'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedDevices',
        'ArrayOfManagedDevice'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedDevice',
        'ManagedDevice'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedDevice',
        'DeviceInfo'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeviceInfo',
        'ArrayOfConfigurationAnswer'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationAnswer',
        'ConfigurationAnswer'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationAnswer',
        'BillingInfo'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\BillingInfo',
        'UpdateManagedDevicesResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedDevicesResponse',
        'UpdateManagementSolution'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSolution',
        'ManagementSolution'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagementSolution',
        'UpdateManagementSolutionResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSolutionResponse',
        'GetManagementItSetupsName'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagementItSetupsName',
        'GetManagementItSetupsNameResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagementItSetupsNameResponse',
        'GetManagedGroup'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedGroup',
        'GetManagedGroupResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedGroupResponse',
        'ArrayOfManagedGroup'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedGroup',
        'ManagedGroup'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedGroup',
        'GetManagedServers'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedServers',
        'GetManagedServersResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedServersResponse',
        'ArrayOfManagedMachineData'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedMachineData',
        'ManagedMachineData'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedMachineData',
        'ArrayOfHardDrive'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfHardDrive',
        'HardDrive'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\HardDrive',
        'GetManagedWorkstations'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedWorkstations',
        'GetManagedWorkstationsResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedWorkstationsResponse',
        'UpdateManagedServers'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedServers',
        'ArrayOfManagedServersData'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedServersData',
        'ManagedServersData'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedServersData',
        'UpdateManagedServersResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedServersResponse',
        'UpdateManagedWorkstations'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedWorkstations',
        'ArrayOfManagedWorkstationsData'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedWorkstationsData',
        'ManagedWorkstationsData'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedWorkstationsData',
        'UpdateManagedWorkstationsResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedWorkstationsResponse',
        'UpdateSpamStatsDomains'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateSpamStatsDomains',
        'ArrayOfSpamStatsDomainData'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpamStatsDomainData',
        'SpamStatsDomainData'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpamStatsDomainData',
        'UpdateSpamStatsDomainsResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateSpamStatsDomainsResponse',
        'UpdateManagementSummaryReports'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSummaryReports',
        'ArrayOfManagementSummaryReport'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagementSummaryReport',
        'ManagementSummaryReport'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagementSummaryReport',
        'UpdateManagementSummaryReportsResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSummaryReportsResponse',
        'RecordCampaignImpression'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordCampaignImpression',
        'RecordCampaignImpressionResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordCampaignImpressionResponse',
        'RecordEmailOpened'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordEmailOpened',
        'RecordEmailOpenedResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordEmailOpenedResponse',
        'RecordLinkClicked'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordLinkClicked',
        'RecordLinkClickedResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordLinkClickedResponse',
        'RecordFormSubmission'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordFormSubmission',
        'RecordFormSubmissionResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordFormSubmissionResponse',
        'IsValidMemberIdAndPassword'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsValidMemberIdAndPassword',
        'IsValidMemberIdAndPasswordResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsValidMemberIdAndPasswordResponse',
        'AuthenticateSession'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateSession',
        'AuthenticateSessionResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateSessionResponse',
        'CreateAuthenticatedMemberHashToken'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreateAuthenticatedMemberHashToken',
        'CreateAuthenticatedMemberHashTokenResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreateAuthenticatedMemberHashTokenResponse',
        'GetMemberIdByRemoteSupportPackageAuthenticationCredentials'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMemberIdByRemoteSupportPackageAuthenticationCredentials',
        'GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse',
        'FindMembers'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindMembers',
        'FindMembersResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindMembersResponse',
        'ArrayOfMemberFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfMemberFindResult',
        'MemberFindResult'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MemberFindResult',
        'CheckConnectWiseAuthenticationCredentials'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CheckConnectWiseAuthenticationCredentials',
        'CheckConnectWiseAuthenticationCredentialsResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CheckConnectWiseAuthenticationCredentialsResponse',
        'GetOpportunity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunity',
        'GetOpportunityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityResponse',
        'Opportunity'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Opportunity',
        'ArrayOfOpportunityItem'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityItem',
        'OpportunityItem'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityItem',
        'ArrayOfForecastDetail'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfForecastDetail',
        'ForecastDetail'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastDetail',
        'ArrayOfOpportunityCustomField'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityCustomField',
        'OpportunityCustomField'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityCustomField',
        'OpportunityTeam'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityTeam',
        'PrimarySalesRepMember'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PrimarySalesRepMember',
        'SecondarySalesRepMember'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SecondarySalesRepMember',
        'ArrayOfSalesIndividualMember'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesIndividualMember',
        'SalesIndividualMember'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesIndividualMember',
        'ArrayOfSalesTeam'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesTeam',
        'SalesTeam'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesTeam',
        'LoadOpportunity'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadOpportunity',
        'LoadOpportunityResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadOpportunityResponse',
        'AddOpportunity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunity',
        'AddOpportunityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityResponse',
        'UpdateOpportunity'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunity',
        'UpdateOpportunityResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityResponse',
        'AddOrUpdateOpportunity'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunity',
        'AddOrUpdateOpportunityResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityResponse',
        'DeleteOpportunity'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunity',
        'DeleteOpportunityResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityResponse',
        'FindOpportunities'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunities',
        'FindOpportunitiesResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunitiesResponse',
        'ArrayOfOpportunityFindResult'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityFindResult',
        'OpportunityFindResult'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityFindResult',
        'FindOpportunityCount'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunityCount',
        'FindOpportunityCountResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunityCountResponse',
        'AddForecastAndRecurringRevenue'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddForecastAndRecurringRevenue',
        'ForecastRevenueInfo'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastRevenueInfo',
        'ForecastItem'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastItem',
        'RecurringRevenueItem'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecurringRevenueItem',
        'AddForecastAndRecurringRevenueResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddForecastAndRecurringRevenueResponse',
        'UpdateForecastAndRecurringRevenue'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateForecastAndRecurringRevenue',
        'UpdateForecastAndRecurringRevenueResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateForecastAndRecurringRevenueResponse',
        'AddOrUpdateForecastAndRecurringRevenue'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateForecastAndRecurringRevenue',
        'AddOrUpdateForecastAndRecurringRevenueResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateForecastAndRecurringRevenueResponse',
        'DeleteForecast'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteForecast',
        'DeleteForecastResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteForecastResponse',
        'DeleteRecurringRevenue'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteRecurringRevenue',
        'DeleteRecurringRevenueResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteRecurringRevenueResponse',
        'AddOpportunityItem'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityItem',
        'AddOpportunityItemResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityItemResponse',
        'UpdateOpportunityItem'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityItem',
        'UpdateOpportunityItemResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityItemResponse',
        'AddOrUpdateOpportunityItem'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityItem',
        'AddOrUpdateOpportunityItemResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityItemResponse',
        'DeleteOpportunityItem'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityItem',
        'DeleteOpportunityItemResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityItemResponse',
        'GetOpportunityDocuments'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityDocuments',
        'GetOpportunityDocumentsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityDocumentsResponse',
        'DeleteOpportunityDocument'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityDocument',
        'DeleteOpportunityDocumentResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityDocumentResponse',
        'DeleteOpportunityNote'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityNote',
        'DeleteOpportunityNoteResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityNoteResponse',
        'AddOpportunityDocuments'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityDocuments',
        'ArrayOfOppDocumentInfo'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOppDocumentInfo',
        'OppDocumentInfo'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OppDocumentInfo',
        'AddOpportunityDocumentsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityDocumentsResponse',
        'OpportunityToProjectConversion'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToProjectConversion',
        'ArrayOfInt'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt',
        'ArrayOfInt1'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt1',
        'OpportunityToProjectConversionResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToProjectConversionResponse',
        'OpportunityToTicketConversion'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToTicketConversion',
        'OpportunityToTicketConversionResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToTicketConversionResponse',
        'OpportunityToSalesOrderConversion'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToSalesOrderConversion',
        'OpportunityToSalesOrderConversionResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToSalesOrderConversionResponse',
        'GetProduct'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProduct',
        'GetProductResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductResponse',
        'Product'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Product',
        'LoadProduct'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProduct',
        'LoadProductResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProductResponse',
        'AddProduct'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddProduct',
        'AddProductResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddProductResponse',
        'UpdateProduct'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateProduct',
        'UpdateProductResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateProductResponse',
        'AddOrUpdateProduct'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProduct',
        'AddOrUpdateProductResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductResponse',
        'DeleteProduct'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProduct',
        'DeleteProductResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductResponse',
        'FindProducts'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProducts',
        'FindProductsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProductsResponse',
        'ArrayOfProductFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductFindResult',
        'ProductFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductFindResult',
        'GetQuantityOnHand'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetQuantityOnHand',
        'ProductQuantityOnHand'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductQuantityOnHand',
        'GetQuantityOnHandResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetQuantityOnHandResponse',
        'GetProductPickedandShipped'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductPickedandShipped',
        'GetProductPickedandShippedResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductPickedandShippedResponse',
        'AddOrUpdateProductPickedandShipped'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductPickedandShipped',
        'AddOrUpdateProductPickedandShippedResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductPickedandShippedResponse',
        'DeleteProductPickedandShipped'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductPickedandShipped',
        'DeleteProductPickedandShippedResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductPickedandShippedResponse',
        'AddOrUpdatePricingSchedule'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingSchedule',
        'PricingSchedule'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PricingSchedule',
        'AddOrUpdatePricingScheduleResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingScheduleResponse',
        'GetPricingSchedule'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingSchedule',
        'GetPricingScheduleResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingScheduleResponse',
        'DeletePricingSchedule'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingSchedule',
        'DeletePricingScheduleResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingScheduleResponse',
        'FindPricingSchedules'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingSchedules',
        'FindPricingSchedulesResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingSchedulesResponse',
        'ArrayOfPricingSchedule'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPricingSchedule',
        'AddOrUpdatePricingDetail'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingDetail',
        'PricingDetail'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PricingDetail',
        'AddOrUpdatePricingDetailResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingDetailResponse',
        'GetPricingDetail'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingDetail',
        'GetPricingDetailResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingDetailResponse',
        'DeletePricingDetail'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingDetail',
        'DeletePricingDetailResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingDetailResponse',
        'FindPricingDetails'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingDetails',
        'FindPricingDetailsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingDetailsResponse',
        'ArrayOfPricingDetail'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPricingDetail',
        'AddOrUpdatePriceBreak'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePriceBreak',
        'PriceBreak'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PriceBreak',
        'AddOrUpdatePriceBreakResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePriceBreakResponse',
        'GetPriceBreak'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPriceBreak',
        'GetPriceBreakResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPriceBreakResponse',
        'DeletePriceBreak'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePriceBreak',
        'DeletePriceBreakResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePriceBreakResponse',
        'FindPriceBreaks'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPriceBreaks',
        'FindPriceBreaksResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPriceBreaksResponse',
        'ArrayOfPriceBreak'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPriceBreak',
        'SetCompanyPricingSchedule'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyPricingSchedule',
        'SetCompanyPricingScheduleResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyPricingScheduleResponse',
        'RemoveCompanyPricingSchedule'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveCompanyPricingSchedule',
        'RemoveCompanyPricingScheduleResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveCompanyPricingScheduleResponse',
        'FindProjects'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjects',
        'FindProjectsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectsResponse',
        'ArrayOfProjectFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectFindResult',
        'ProjectFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectFindResult',
        'FindProjectCount'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectCount',
        'FindProjectCountResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectCountResponse',
        'GetProjectWorkPlan'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectWorkPlan',
        'GetProjectWorkPlanResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectWorkPlanResponse',
        'ProjectWorkPlan'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectWorkPlan',
        'ArrayOfProjectPhase'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectPhase',
        'ProjectPhase'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhase',
        'ArrayOfProjectTicket'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTicket',
        'ProjectTicket'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicket',
        'ProjectTicketSummaryInfo'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicketSummaryInfo',
        'ProjectPhaseSummaryInfo'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhaseSummaryInfo',
        'LoadProjectWorkPlan'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProjectWorkPlan',
        'LoadProjectWorkPlanResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProjectWorkPlanResponse',
        'GetProject'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProject',
        'GetProjectResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectResponse',
        'Project'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Project',
        'ProjectSummaryInfo'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectSummaryInfo',
        'DeleteProject'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProject',
        'DeleteProjectResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectResponse',
        'DeleteProjectTicket'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTicket',
        'DeleteProjectTicketResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTicketResponse',
        'DeleteProjectPhase'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectPhase',
        'DeleteProjectPhaseResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectPhaseResponse',
        'DeleteProjectTeamMember'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTeamMember',
        'DeleteProjectTeamMemberResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTeamMemberResponse',
        'DeleteProjectContact'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectContact',
        'DeleteProjectContactResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectContactResponse',
        'DeleteProjectNote'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectNote',
        'DeleteProjectNoteResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectNoteResponse',
        'ConvertServiceTicketToProjectTicket'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConvertServiceTicketToProjectTicket',
        'ConvertServiceTicketToProjectTicketResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConvertServiceTicketToProjectTicketResponse',
        'AddOrUpdateProjectNote'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectNote',
        'ProjectNote'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectNote',
        'AddOrUpdateProjectNoteResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectNoteResponse',
        'AddOrUpdateProjectContact'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectContact',
        'ProjectContact'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectContact',
        'AddOrUpdateProjectContactResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectContactResponse',
        'AddOrUpdateProjectTeamMember'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTeamMember',
        'ProjectTeamMember'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTeamMember',
        'AddOrUpdateProjectTeamMemberResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTeamMemberResponse',
        'AddOrUpdateProject'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProject',
        'AddOrUpdateProjectResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectResponse',
        'AddOrUpdateProjectPhase'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectPhase',
        'AddOrUpdateProjectPhaseResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectPhaseResponse',
        'GetProjectPhase'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectPhase',
        'GetProjectPhaseResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectPhaseResponse',
        'AddOrUpdateProjectTicket'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTicket',
        'AddOrUpdateProjectTicketResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTicketResponse',
        'AddOrUpdateProjectWorkPlan'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectWorkPlan',
        'AddOrUpdateProjectWorkPlanResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectWorkPlanResponse',
        'FindPhases'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPhases',
        'FindPhasesResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPhasesResponse',
        'ArrayOfProjectPhaseFindResults'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectPhaseFindResults',
        'ProjectPhaseFindResults'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhaseFindResults',
        'GetProjectNote'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectNote',
        'GetProjectNoteResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectNoteResponse',
        'FindProjectNotes'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectNotes',
        'FindProjectNotesResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectNotesResponse',
        'ArrayOfProjectNoteFindResult'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectNoteFindResult',
        'ProjectNoteFindResult'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectNoteFindResult',
        'GetProjectContact'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectContact',
        'GetProjectContactResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectContactResponse',
        'FindProjectContacts'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectContacts',
        'FindProjectContactsResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectContactsResponse',
        'ArrayOfProjectContactFindResult'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectContactFindResult',
        'ProjectContactFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectContactFindResult',
        'GetProjectTeamMember'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTeamMember',
        'GetProjectTeamMemberResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTeamMemberResponse',
        'FindProjectTeamMembers'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTeamMembers',
        'FindProjectTeamMembersResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTeamMembersResponse',
        'ArrayOfProjectTeamMemberFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTeamMemberFindResult',
        'ProjectTeamMemberFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTeamMemberFindResult',
        'GetProjectTicket'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTicket',
        'GetProjectTicketResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTicketResponse',
        'FindProjectTickets'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTickets',
        'FindProjectTicketsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTicketsResponse',
        'ArrayOfProjectTicketFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTicketFindResult',
        'ProjectTicketFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicketFindResult',
        'DeleteProjectProduct'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectProduct',
        'DeleteProjectProductResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectProductResponse',
        'GetPurchaseOrder'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPurchaseOrder',
        'GetPurchaseOrderResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPurchaseOrderResponse',
        'PurchaseOrder'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrder',
        'CompanyReference'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyReference',
        'ContactReference'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactReference',
        'PurchasingCompanyAddress'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchasingCompanyAddress',
        'ArrayOfPurchaseOrderLineItem'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPurchaseOrderLineItem',
        'PurchaseOrderLineItem'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrderLineItem',
        'LoadPurchaseOrder'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadPurchaseOrder',
        'LoadPurchaseOrderResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadPurchaseOrderResponse',
        'AddPurchaseOrder'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrder',
        'PurchaseOrderUpdateValues'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrderUpdateValues',
        'DropShipAddress'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DropShipAddress',
        'AddPurchaseOrderResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrderResponse',
        'UpdatePurchaseOrder'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrder',
        'UpdatePurchaseOrderResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrderResponse',
        'AddOrUpdatePurchaseOrder'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrder',
        'AddOrUpdatePurchaseOrderResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrderResponse',
        'DeletePurchaseOrder'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrder',
        'DeletePurchaseOrderResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrderResponse',
        'AddPurchaseOrderLineItem'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrderLineItem',
        'AddPurchaseOrderLineItemResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrderLineItemResponse',
        'UpdatePurchaseOrderLineItem'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrderLineItem',
        'UpdatePurchaseOrderLineItemResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrderLineItemResponse',
        'AddOrUpdatePurchaseOrderLineItem'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrderLineItem',
        'AddOrUpdatePurchaseOrderLineItemResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrderLineItemResponse',
        'DeletePurchaseOrderLineItem'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrderLineItem',
        'DeletePurchaseOrderLineItemResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrderLineItemResponse',
        'GetAllOpenProductDemands'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllOpenProductDemands',
        'GetAllOpenProductDemandsResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllOpenProductDemandsResponse',
        'ArrayOfProductDemand'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDemand',
        'ProductDemand'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDemand',
        'CreatePurchaseOrderFromProductDemandsAction'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreatePurchaseOrderFromProductDemandsAction',
        'ArrayOfProductDemandReference'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDemandReference',
        'ProductDemandReference'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDemandReference',
        'CreatePurchaseOrderFromProductDemandsActionResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreatePurchaseOrderFromProductDemandsActionResponse',
        'FindPurchaseOrders'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPurchaseOrders',
        'FindPurchaseOrdersResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPurchaseOrdersResponse',
        'ArrayOfPurchaseOrderFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPurchaseOrderFindResult',
        'PurchaseOrderFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrderFindResult',
        'GetReports'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReports',
        'GetReportsResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReportsResponse',
        'ArrayOfReport'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfReport',
        'Report'                                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Report',
        'FieldInfo'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FieldInfo',
        'GetReportFields'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReportFields',
        'GetReportFieldsResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReportFieldsResponse',
        'ArrayOfFieldInfo'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfFieldInfo',
        'GetPortalReports'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalReports',
        'GetPortalReportsResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalReportsResponse',
        'RunPortalReport'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunPortalReport',
        'RunPortalReportResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunPortalReportResponse',
        'ArrayOfResultRow'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfResultRow',
        'ResultRow'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ResultRow',
        'FieldValue'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FieldValue',
        'RunReportQuery'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQuery',
        'RunReportQueryResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryResponse',
        'RunReportQueryWithFilters'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithFilters',
        'RunReportQueryWithFiltersResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithFiltersResponse',
        'RunReportQueryWithTimeout'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithTimeout',
        'RunReportQueryWithTimeoutResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithTimeoutResponse',
        'RunReportCount'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportCount',
        'RunReportCountResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportCountResponse',
        'GetTicketScheduleEntry'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketScheduleEntry',
        'GetTicketScheduleEntryResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketScheduleEntryResponse',
        'TicketScheduleEntry'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketScheduleEntry',
        'GetActivityScheduleEntry'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityScheduleEntry',
        'GetActivityScheduleEntryResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityScheduleEntryResponse',
        'ActivityScheduleEntry'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityScheduleEntry',
        'GetMiscScheduleEntry'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMiscScheduleEntry',
        'GetMiscScheduleEntryResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMiscScheduleEntryResponse',
        'MiscScheduleEntry'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MiscScheduleEntry',
        'FindScheduleEntries'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindScheduleEntries',
        'FindScheduleEntriesResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindScheduleEntriesResponse',
        'ArrayOfScheduleEntryFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfScheduleEntryFindResult',
        'ScheduleEntryFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ScheduleEntryFindResult',
        'AddOrUpdateTicketScheduleEntry'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketScheduleEntry',
        'AddOrUpdateTicketScheduleEntryResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketScheduleEntryResponse',
        'DeleteTicketScheduleEntry'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketScheduleEntry',
        'DeleteTicketScheduleEntryResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketScheduleEntryResponse',
        'AddOrUpdateActivityScheduleEntry'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityScheduleEntry',
        'AddOrUpdateActivityScheduleEntryResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityScheduleEntryResponse',
        'DeleteActivityScheduleEntry'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityScheduleEntry',
        'DeleteActivityScheduleEntryResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityScheduleEntryResponse',
        'AddOrUpdateMiscScheduleEntry'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateMiscScheduleEntry',
        'AddOrUpdateMiscScheduleEntryResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateMiscScheduleEntryResponse',
        'DeleteMiscScheduleEntry'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteMiscScheduleEntry',
        'DeleteMiscScheduleEntryResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteMiscScheduleEntryResponse',
        'GetServiceTicket'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceTicket',
        'GetServiceTicketResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceTicketResponse',
        'ServiceTicket'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ServiceTicket',
        'TicketBase'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketBase',
        'ArrayOfTicketConfiguration'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketConfiguration',
        'TicketConfiguration'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketConfiguration',
        'ArrayOfTicketNote'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketNote',
        'TicketNote'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketNote',
        'ArrayOfTicketTask'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketTask',
        'TicketTask'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketTask',
        'LoadServiceTicket'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadServiceTicket',
        'LoadServiceTicketResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadServiceTicketResponse',
        'AddServiceTicketViaManagedIdentifier'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaManagedIdentifier',
        'AddServiceTicketViaManagedIdentifierResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaManagedIdentifierResponse',
        'UpdateServiceTicketViaManagedIdentifier'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaManagedIdentifier',
        'UpdateServiceTicketViaManagedIdentifierResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaManagedIdentifierResponse',
        'AddOrUpdateServiceTicketViaManagedIdentifier'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaManagedIdentifier',
        'AddOrUpdateServiceTicketViaManagedIdentifierResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaManagedIdentifierResponse',
        'AddServiceTicketViaCompanyIdentifier'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaCompanyIdentifier',
        'AddServiceTicketViaCompanyIdentifierResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaCompanyIdentifierResponse',
        'UpdateServiceTicketViaCompanyIdentifier'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaCompanyIdentifier',
        'UpdateServiceTicketViaCompanyIdentifierResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaCompanyIdentifierResponse',
        'AddOrUpdateServiceTicketViaCompanyIdentifier'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaCompanyIdentifier',
        'AddOrUpdateServiceTicketViaCompanyIdentifierResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaCompanyIdentifierResponse',
        'DeleteServiceTicket'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteServiceTicket',
        'DeleteServiceTicketResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteServiceTicketResponse',
        'FindServiceTickets'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTickets',
        'FindServiceTicketsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTicketsResponse',
        'ArrayOfTicketFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketFindResult',
        'TicketFindResult'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketFindResult',
        'FindServiceTicketCount'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTicketCount',
        'FindServiceTicketCountResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTicketCountResponse',
        'GetServiceStatuses'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceStatuses',
        'GetServiceStatusesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceStatusesResponse',
        'SearchKnowledgebase'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebase',
        'SearchKnowledgebaseResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebaseResponse',
        'ArrayOfKnowledgeBaseResult'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfKnowledgeBaseResult',
        'KnowledgeBaseResult'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\KnowledgeBaseResult',
        'SearchKnowledgebaseCount'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebaseCount',
        'SearchKnowledgebaseCountResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebaseCountResponse',
        'DeleteTicketDocument'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketDocument',
        'DeleteTicketDocumentResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketDocumentResponse',
        'GetTicketProductList'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketProductList',
        'GetTicketProductListResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketProductListResponse',
        'ArrayOfTicketProduct'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketProduct',
        'TicketProduct'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketProduct',
        'AddTicketProduct'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketProduct',
        'AddTicketProductResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketProductResponse',
        'UpdateTicketProduct'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateTicketProduct',
        'UpdateTicketProductResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateTicketProductResponse',
        'AddOrUpdateTicketProduct'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketProduct',
        'AddOrUpdateTicketProductResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketProductResponse',
        'DeleteTicketProduct'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketProduct',
        'DeleteTicketProductResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketProductResponse',
        'GetTicketDocuments'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketDocuments',
        'GetTicketDocumentsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketDocumentsResponse',
        'AddOrUpdateTicketNote'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketNote',
        'AddOrUpdateTicketNoteResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketNoteResponse',
        'AddTicketDocuments'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketDocuments',
        'AddTicketDocumentsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketDocumentsResponse',
        'AddServiceTicketToKnowledgebase'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketToKnowledgebase',
        'AddServiceTicketToKnowledgebaseResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketToKnowledgebaseResponse',
    );

    private function setClassmap($classmap)
    {
        $this->classmap = $classmap;
    }

    private function getClassmap()
    {
        return $this->classmap;
    }

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ServiceTicketApi.asmx?wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        parent::__construct($host . $wsdl, $options);
    }

    /**
     * Gets a service ticket by the ticket Id. If no service ticket exists with the given ticket Id, null is returned.
     *
     * @param GetServiceTicket $parameters
     * @return GetServiceTicketResponse
     */
    public function GetServiceTicket(GetServiceTicket $parameters)
    {
        return $this->__soapCall('GetServiceTicket', array($parameters));
    }

    /**
     * Gets a service ticket by the ticket Id. If no service ticket exists with the given ticket Id, an error is returned.
     *
     * @param LoadServiceTicket $parameters
     * @return LoadServiceTicketResponse
     */
    public function LoadServiceTicket(LoadServiceTicket $parameters)
    {
        return $this->__soapCall('LoadServiceTicket', array($parameters));
    }

    /**
     * Adds a new service ticket for a company identified by managed id.
     *
     * @param AddServiceTicketViaManagedIdentifier $parameters
     * @return AddServiceTicketViaManagedIdentifierResponse
     */
    public function AddServiceTicketViaManagedIdentifier(AddServiceTicketViaManagedIdentifier $parameters)
    {
        return $this->__soapCall('AddServiceTicketViaManagedIdentifier', array($parameters));
    }

    /**
     * Updates an existing service ticket for a company identified by managed id.
     *
     * @param UpdateServiceTicketViaManagedIdentifier $parameters
     * @return UpdateServiceTicketViaManagedIdentifierResponse
     */
    public function UpdateServiceTicketViaManagedIdentifier(UpdateServiceTicketViaManagedIdentifier $parameters)
    {
        return $this->__soapCall('UpdateServiceTicketViaManagedIdentifier', array($parameters));
    }

    /**
     * Adds or updates a service ticket for a company identified by managed id. If the service ticket Id is 0, the service ticket is added. If non-zero, the existing service ticket with that ticket Id is updated.
     *
     * @param AddOrUpdateServiceTicketViaManagedIdentifier $parameters
     * @return AddOrUpdateServiceTicketViaManagedIdentifierResponse
     */
    public function AddOrUpdateServiceTicketViaManagedIdentifier(AddOrUpdateServiceTicketViaManagedIdentifier $parameters)
    {
        return $this->__soapCall('AddOrUpdateServiceTicketViaManagedIdentifier', array($parameters));
    }

    /**
     * Adds a new service ticket for a company identified by the text-based company id.
     *
     * @param AddServiceTicketViaCompanyIdentifier $parameters
     * @return AddServiceTicketViaCompanyIdentifierResponse
     */
    public function AddServiceTicketViaCompanyIdentifier(AddServiceTicketViaCompanyIdentifier $parameters)
    {
        return $this->__soapCall('AddServiceTicketViaCompanyIdentifier', array($parameters));
    }

    /**
     * Updates an existing service ticket for a company identified by the text-based company id.
     *
     * @param UpdateServiceTicketViaCompanyIdentifier $parameters
     * @return UpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function UpdateServiceTicketViaCompanyIdentifier(UpdateServiceTicketViaCompanyIdentifier $parameters)
    {
        return $this->__soapCall('UpdateServiceTicketViaCompanyIdentifier', array($parameters));
    }

    /**
     * Adds or updates a service ticket for a company identified by the text-based company id. If the service ticket Id is 0, the service ticket is added. If non-zero, the existing service ticket with that ticket Id is updated.
     *
     * @param AddOrUpdateServiceTicketViaCompanyIdentifier $parameters
     * @return AddOrUpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function AddOrUpdateServiceTicketViaCompanyIdentifier(AddOrUpdateServiceTicketViaCompanyIdentifier $parameters)
    {
        return $this->__soapCall('AddOrUpdateServiceTicketViaCompanyIdentifier', array($parameters));
    }

    /**
     * Deletes a service ticket by the ticket Id.
     *
     * @param DeleteServiceTicket $parameters
     * @return DeleteServiceTicketResponse
     */
    public function DeleteServiceTicket(DeleteServiceTicket $parameters)
    {
        return $this->__soapCall('DeleteServiceTicket', array($parameters));
    }

    /**
     * Finds service ticket information by a set of conditions.  If isOpen is set, it will pre-filter by the ticket status.
     *
     * @param FindServiceTickets $parameters
     * @return FindServiceTicketsResponse
     */
    public function FindServiceTickets(FindServiceTickets $parameters)
    {
        return $this->__soapCall('FindServiceTickets', array($parameters));
    }

    /**
     * Gets the count of service tickets that meet the specified conditions
     *
     * @param FindServiceTicketCount $parameters
     * @return FindServiceTicketCountResponse
     */
    public function FindServiceTicketCount(FindServiceTicketCount $parameters)
    {
        return $this->__soapCall('FindServiceTicketCount', array($parameters));
    }

    /**
     * Gets the list of statuses available to the specified ticket.
     *
     * @param GetServiceStatuses $parameters
     * @return GetServiceStatusesResponse
     */
    public function GetServiceStatuses(GetServiceStatuses $parameters)
    {
        return $this->__soapCall('GetServiceStatuses', array($parameters));
    }

    /**
     * Performs a Knowledgebase search using the specified parameters
     *
     * @param SearchKnowledgebase $parameters
     * @return SearchKnowledgebaseResponse
     */
    public function SearchKnowledgebase(SearchKnowledgebase $parameters)
    {
        return $this->__soapCall('SearchKnowledgebase', array($parameters));
    }

    /**
     * Counts the Knowledgebase records that will be returned by performing the associated search.
     *
     * @param SearchKnowledgebaseCount $parameters
     * @return SearchKnowledgebaseCountResponse
     */
    public function SearchKnowledgebaseCount(SearchKnowledgebaseCount $parameters)
    {
        return $this->__soapCall('SearchKnowledgebaseCount', array($parameters));
    }

    /**
     * Removes the document from the ticket
     *
     * @param DeleteTicketDocument $parameters
     * @return DeleteTicketDocumentResponse
     */
    public function DeleteTicketDocument(DeleteTicketDocument $parameters)
    {
        return $this->__soapCall('DeleteTicketDocument', array($parameters));
    }

    /**
     * Get a list of products for the specified ticket
     *
     * @param GetTicketProductList $parameters
     * @return GetTicketProductListResponse
     */
    public function GetTicketProductList(GetTicketProductList $parameters)
    {
        return $this->__soapCall('GetTicketProductList', array($parameters));
    }

    /**
     * Add a product on a ticket
     *
     * @param AddTicketProduct $parameters
     * @return AddTicketProductResponse
     */
    public function AddTicketProduct(AddTicketProduct $parameters)
    {
        return $this->__soapCall('AddTicketProduct', array($parameters));
    }

    /**
     * Update a product on a ticket
     *
     * @param UpdateTicketProduct $parameters
     * @return UpdateTicketProductResponse
     */
    public function UpdateTicketProduct(UpdateTicketProduct $parameters)
    {
        return $this->__soapCall('UpdateTicketProduct', array($parameters));
    }

    /**
     * Add or Update a product on a ticket
     *
     * @param AddOrUpdateTicketProduct $parameters
     * @return AddOrUpdateTicketProductResponse
     */
    public function AddOrUpdateTicketProduct(AddOrUpdateTicketProduct $parameters)
    {
        return $this->__soapCall('AddOrUpdateTicketProduct', array($parameters));
    }

    /**
     * Delete Product from a ticket
     *
     * @param DeleteTicketProduct $parameters
     * @return DeleteTicketProductResponse
     */
    public function DeleteTicketProduct(DeleteTicketProduct $parameters)
    {
        return $this->__soapCall('DeleteTicketProduct', array($parameters));
    }

    /**
     * Gets the documents attached to the specified ticket
     *
     * @param GetTicketDocuments $parameters
     * @return GetTicketDocumentsResponse
     */
    public function GetTicketDocuments(GetTicketDocuments $parameters)
    {
        return $this->__soapCall('GetTicketDocuments', array($parameters));
    }

    /**
     * Gets the document for the specified documentId
     *
     * @param GetDocument $parameters
     * @return GetDocumentResponse
     */
    public function GetDocument(GetDocument $parameters)
    {
        return $this->__soapCall('GetDocument', array($parameters));
    }

    /**
     * Add a new ticket note or update an existing ticket note by service ticket id.
     *
     * @param AddOrUpdateTicketNote $parameters
     * @return AddOrUpdateTicketNoteResponse
     */
    public function AddOrUpdateTicketNote(AddOrUpdateTicketNote $parameters)
    {
        return $this->__soapCall('AddOrUpdateTicketNote', array($parameters));
    }

    /**
     * Add a document to a ticket
     *
     * @param AddTicketDocuments $parameters
     * @return AddTicketDocumentsResponse
     */
    public function AddTicketDocuments(AddTicketDocuments $parameters)
    {
        return $this->__soapCall('AddTicketDocuments', array($parameters));
    }

    /**
     * Adds the ticket to Knowledgebase
     *
     * @param AddServiceTicketToKnowledgebase $parameters
     * @return AddServiceTicketToKnowledgebaseResponse
     */
    public function AddServiceTicketToKnowledgebase(AddServiceTicketToKnowledgebase $parameters)
    {
        return $this->__soapCall('AddServiceTicketToKnowledgebase', array($parameters));
    }

}