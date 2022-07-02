import { StyleSheet, Text, View, render} from 'react-native';
import { NavigationContainer,NavigationActions, StackActions, DefaultTheme } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import 'react-native-gesture-handler';
import About from '../compontent/about';
import Exercise from '../compontent/exercise';
import Exercises from '../compontent/exercises';
import Instellingen from '../compontent/instellingen';
import LanguageScreen from '../compontent/Language';
import Oefening from '../compontent/oefening';
import Oefeningen from '../compontent/oefeningen';
import Over from '../compontent/over';
import Settings from '../compontent/settings';
import web from '../compontent/web';
const Tab = createMaterialBottomTabNavigator();
const TabNL = createMaterialBottomTabNavigator();
const TabEN = createMaterialBottomTabNavigator();
const StackNL = createStackNavigator();


const MyTabsNL = () => {
  return (
    <TabNL.Navigator>
      <TabNL.Screen
        name="Over"
        component={Over}
        options={{
          headerShown: false,
          tabBarLabel: 'Over',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="information-variant" color={color} size={24} />
          ),
        }}
      />
      <TabNL.Screen
        name="Oefeningen"
        component={StackInstructionNL}
        options={{
          tabBarLabel: 'Oefeningen',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="weight-lifter" color={color} size={24} />
          ),
        }}
      />
      <TabNL.Screen
        name="Instellingen"
        component={StackSettingsNL}
        options={{
          headerShown: false,
          tabBarLabel: 'Instellingen',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="cog" color={color} size={24} />
          ),
        }}
      />
    </TabNL.Navigator>
  );
}

const AppNL = () => {
  return (
    <NavigationContainer  independent={true} theme={MyTheme}>
      <MyTabsNL />
    </NavigationContainer>
  );
}
const StackInstructionNL = () => {
  return (
    <StackNL.Navigator
      screenOptions={{
        headerShown: false
      }}>
      <StackNL.Screen
        name='OefeningenScreen'
        component={Oefeningen} />
      <StackNL.Screen
        name='OefeningScreen'
        component={Oefening} />
    </StackNL.Navigator>
  )
}
const StackSettingsNL = () => {
    return (
        <StackNL.Navigator
            screenOptions={{
                headerShown: false
            }}>
            <StackNL.Screen
                name='instellingen'
                component={Instellingen} />
            <StackNL.Screen
                name='web'
                component={web} />
        </StackNL.Navigator>
    )
}

const MyTheme = {
  ...DefaultTheme,
  colors: {
    ...DefaultTheme.colors,
    primary: '#bfedef',
  },
};

export default AppNL